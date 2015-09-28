<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [
            [
                'titulo' => 'Lorem ipsum dolor 1',
                'data' => '1/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 2',
                'data' => '2/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 3',
                'data' => '3/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 4',
                'data' => '4/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 5',
                'data' => '5/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 6',
                'data' => '6/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 7',
                'data' => '7/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 8',
                'data' => '8/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 9',
                'data' => '9/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
            [
                'titulo' => 'Lorem ipsum dolor 10',
                'data' => '10/09/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam hendrerit, nisi at ultricies semper, sem nunc bibendum metus, eget lacinia leo ex eget arcu.
                In sodales nibh nulla, nec commodo mi ultricies id. '
            ],
        ];

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
