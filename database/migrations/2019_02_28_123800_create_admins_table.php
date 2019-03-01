<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //up:tao bang du lieu
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            //increment:khoa tuwj dong tang, unsigned(): tự động tăng và không âm(bát đầu từ 1)
            $table->string('username',60)->unique();
            //unique(): user name ko dc trung nhau
            //bắt buộc phải nhập
            $table->string('password',60);
            $table->string('email',60)->unique();
            $table->tinyInteger('role')->default(1);// gán gt mặc định role=1
            $table->tinyInteger('status')->default(0);
            $table->string('avatar',120)->nullable();//cho phép trường này được rỗng
            $table->string('phone',20)->nullable();
            $table->text('address')->nullable();
            $table->timestamps();//mac dinh tao 2 trg create_time va update_time
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //down: xoa bang du lieu
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
