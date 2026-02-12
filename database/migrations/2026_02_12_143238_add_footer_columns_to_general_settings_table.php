<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('general_settings', function (Blueprint $table) {
            // About Us Section
            $table->string('footer_about_title')->default('About Us');
            $table->text('footer_about_description')->nullable();

            // Latest News Section
            $table->string('footer_news_title')->default('Latest News');

            // Contact Us Section
            $table->string('footer_contact_address')->nullable();
            $table->string('footer_contact_phone')->nullable();
            $table->string('footer_contact_fax')->nullable();
            $table->string('footer_contact_email')->nullable();
            $table->string('footer_contact_website')->nullable();

            // Our Services Section
            $table->string('footer_services_title')->default('Our Services');

            // Copyright
            $table->string('footer_copyright')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('general_settings', function (Blueprint $table) {
            $table->dropColumn([
                'footer_about_title',
                'footer_about_description',
                'footer_news_title',
                'footer_contact_address',
                'footer_contact_phone',
                'footer_contact_fax',
                'footer_contact_email',
                'footer_contact_website',
                'footer_services_title',
                'footer_copyright'
            ]);
        });
    }
};
