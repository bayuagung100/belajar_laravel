<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MalasngodingEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');

        //tanpa attach
        // return $this->from('bayuagung100@gmail.com')
        // ->view('emailku')
        // ->with(
        //     [
        //         'nama' => 'Bayu agung gumelar',
        //         'website' => 'www.bayuagung100.com',
        // ])

        //dengan attach
        return $this->from('bayuagung100@gmail.com')
        ->view('emailku')
        ->with(
            [
                'nama' => 'Bayu agung gumelar',
                'website' => 'www.bayuagung100.com',
        ])
        ->attach(public_path('/data_file').'/1579140057_WhatsApp Image 2019-11-13 at 19.34.06.jpeg', [
            'as' => 'demo.jpg',
            'mime' => 'image/jpeg',
        ]);
    }
}
