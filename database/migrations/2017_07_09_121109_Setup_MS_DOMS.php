<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupMSDOMS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            //B\Form\Base::seed();
         //B\Employee\Base::seed();
       // B\Users\Base::seed();
        B\Query\Base::seed();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // B\Form\Base::rollback();
         //B\Employee\Base::rollback();
        //B\Users\Base::rollback();
        B\Query\Base::rollback();
    }
}
