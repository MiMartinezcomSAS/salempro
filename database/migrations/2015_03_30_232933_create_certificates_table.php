<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::create('certificates', function(Blueprint $table)
        {
            $table->string('apto');
            $table->boolean('apto_alimento');
            $table->boolean('apto_alturas');
            $table->text('porque_aplazado');
            $table->boolean('uso_epp')->default(0);
            $table->boolean('manejo_carga')->default(0);
            $table->boolean('pausas_activas')->default(0);
            $table->boolean('uso_optica')->default(0);
            $table->boolean('audiometria')->default(0);
            $table->boolean('expirometria')->default(0);
            $table->boolean('valoracion_optometria')->default(0);
            $table->boolean('uso_medias_varices')->default(0);
            $table->boolean('osteomuscular')->default(0);
            $table->boolean('fonoaudiologia')->default(0);
            $table->boolean('vertigo')->default(0);
            $table->boolean('agudeza_visual')->default(0);
            $table->boolean('optometria')->default(0);
            $table->boolean('espirometria')->default(0);
            $table->boolean('resp')->default(0);
            $table->boolean('egg')->default(0);
            $table->boolean('cardiovascular')->default(0);
            $table->boolean('uñas')->default(0);
            $table->boolean('basiloscopia')->default(0);
            $table->boolean('fg')->default(0);
            $table->boolean('ch')->default(0);
            $table->boolean('po')->default(0);
            $table->boolean('serologia')->default(0);
            $table->boolean('rh')->default(0);
            $table->boolean('glucosa_pre')->default(0);
            $table->boolean('post')->default(0);
            $table->boolean('copro')->default(0);
            $table->boolean('sust_psicoactivas')->default(0);
            $table->boolean('perf_lipidico')->default(0);
            $table->boolean('colest_total')->default(0);
            $table->boolean('tgc')->default(0);
            $table->boolean('pruebas_psicotecnicas')->default(0);
            $table->boolean('alcohol_aliento')->default(0);
            $table->boolean('otros')->default(0);
            $table->boolean('PVE-visual')->default(0);
            $table->boolean('PVE-audiovisual')->default(0);
            $table->boolean('PVE-ergonomico')->default(0);
            $table->boolean('PVE-respiratorio')->default(0);
            $table->boolean('PVE-cardiovascular')->default(0);
            $table->boolean('PVE-psicosocial')->default(0);

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamp('created_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('certificates');
	}

}
