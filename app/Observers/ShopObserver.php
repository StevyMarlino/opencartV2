<?php

namespace App\Observers;

use App\Mail\ShopActivated;
use App\Models\Shop;
use Illuminate\Support\Facades\Mail;

class ShopObserver
{
    /**
     * Handle the Shop "created" event.
     *
     * @param Shop $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "updated" event.
     *
     * @param Shop $shop
     * @return void
     */
    public function updated(Shop $shop)
    {
        if(!$shop->getOriginal('is_active') && $shop->is_active)
        {
            // send mail if shop is active ot the owner user
            Mail::to($shop->owner)->send(new ShopActivated($shop));

            // change role customer to seller maybe
            $shop->owner->setRole('seller');
        }
    }

    /**
     * Handle the Shop "deleted" event.
     *
     * @param Shop $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "restored" event.
     *
     * @param Shop $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "force deleted" event.
     *
     * @param Shop $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
