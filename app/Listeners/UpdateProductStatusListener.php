<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Message;

class UpdateProductStatusListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $products=$event->products;
        foreach($products as $product)
        {
            $qty=$product->quantity;
            $reorder=$product->reorder;
            if($qty<$reorder)
            {
               $product->update([
                    'status'=>'outofstock'
                ]);

            }
            else{
                $product->update([
                    'status'=>'instock'
                ]);

            }

        }

    }
}
