<?php
 
namespace App\Http\Controllers;
 
use Auth;
use App\Order;
use App\Http\Requests;
use Illuminate\Http\Request;
Use App\User;
use App\Product;
use DB;
class OrderController extends Controller
{ 
   /**
    * Make a Stripe payment.
    *
    * @param Illuminate\Http\Request $request
    * @param App\Product $product
    * @return chargeCustomer()
    */
    public function postPayWithStripe(Request $request, \App\Product $product)
    {
		//dd($product->id);
		//dd($request);
        return $this->chargeCustomer($product->id, $product->price, $product->name, $request->input('stripeToken'));
    }
 
   /**
    * Charge a Stripe customer.
    *
    * @var Stripe\Customer $customer
    * @param integer $product_id
    * @param integer $product_price
    * @param string $product_name
    * @param string $token
    * @return createStripeCharge()
    */
    public function chargeCustomer($product_id, $product_price, $product_name, $token)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
        if (!$this->isStripeCustomer())
        {
            $customer = $this->createStripeCustomer($token);
        }
        else
        {
            $customer = \Stripe\Customer::retrieve(Auth::user()->stripe_id);
        }
 
        return $this->createStripeCharge($product_id, $product_price, $product_name, $customer);
    }
 
   /**
    * Create a Stripe charge.
    *
    * @var Stripe\Charge $charge
    * @var Stripe\Error\Card $e
    * @param integer $product_id
    * @param integer $product_price
    * @param string $product_name
    * @param Stripe\Customer $customer
    * @return postStoreOrder()
    */
    public function createStripeCharge($product_id, $product_price, $product_name, $customer)
    {
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => $product_price,
                "currency" => "usd",
                "customer" => $customer->id,
                "description" => $product_name
            ));
        } catch(\Stripe\Error\Card $e) {
            return redirect()
                ->route('index')
                ->with('error', 'Your credit card was been declined. Please try again or contact us.');
    }
 
        return $this->postStoreOrder($product_name, $product_id);
    }
 
   /**
    * Create a new Stripe customer for a given user.
    *
    * @var Stripe\Customer $customer
    * @param string $token
    * @return Stripe\Customer $customer
    */
    public function createStripeCustomer($token)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
 
        $customer = \Stripe\Customer::create(array(
            "description" => Auth::user()->email,
            "source" => $token
        ));
 
        Auth::user()->stripe_id = $customer->id;
        Auth::user()->save();
 
        return $customer;
    }
 
   /**
    * Check if the Stripe customer exists.
    *
    * @return boolean
    */
    public function isStripeCustomer()
    {
        return Auth::user() && \App\User::where('id', Auth::user()->id)->whereNotNull('stripe_id')->first();
    }
 
   /**
    * Store a order.
    *
    * @param string $product_name
    * @return redirect()
    */
    public function postStoreOrder($product_name, $product_id)
    {       
        
        Order::create([
            'email' => Auth::user()->email,
            'product' => $product_name,
            'user_id' => Auth::id(),
            'product_id' => $product_id
        ]);

 
        if($product_name == 'Text Review Plan')
            return redirect('/textform')->with('success', 'Thanks for the Payment. You have chosen our Text Review Plan. Now Go Ahead and Add Your Website Details!');    
        else
            return redirect('/videoform')->with('success', 'Thanks for the Payment. You have chosen our Video Review Plan. Now Go Ahead and Add Your Website Details!');
    }
}