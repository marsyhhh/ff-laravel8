<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'tittle' => 'Selamat datang di Indomaret selamat berbelanja ^_^',
            'gretting' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi eius voluptatem dolorem adipisci accusantium delectus non nobis facilis aliquid aut sequi modi laudantium fuga quas quibusdam magni praesentium nesciunt fugit placeat, impedit veniam. Reprehenderit quo aspernatur nesciunt qui eveniet odio hic iste, voluptatum corrupti maiores quibusdam temporibus sed repellendus voluptate nisi blanditiis iusto illo dolorum laborum. Nisi minus id eum quam, ratione optio cupiditate recusandae facere in libero vitae sunt obcaecati voluptatibus natus laboriosam debitis nobis nemo tempora odio. Minus cumque rerum eum dicta at praesentium obcaecati accusamus! Voluptatibus maxime nam vero dolores porro labore itaque dolor quae sunt! Facere similique quis deleniti consequatur fugiat perferendis veniam obcaecati in cum ab illum, natus cupiditate doloribus animi fugit, omnis aliquam repudiandae exercitationem alias error placeat. Porro culpa iure quam ex sequi. Natus dolor quaerat tempore doloribus facere voluptatem possimus, sequi expedita dolore ullam reiciendis. Unde, quasi. Officia beatae laboriosam officiis eos est id iste sunt. Perferendis architecto consequatur asperiores repellat itaque deserunt in unde eos eum, velit laudantium laboriosam omnis vel, tenetur magnam ab quam voluptatibus voluptates error dolorum, corporis alias. Error architecto delectus odit, ut sequi laudantium. Non optio, reiciendis ex similique quaerat facilis unde dolore dignissimos vel dolores magni, quibusdam dolorem? Ratione commodi doloribus distinctio dicta eligendi optio nihil sed reprehenderit laudantium sapiente! Nostrum modi iure aut, asperiores voluptatem vel optio numquam, at laborum sunt molestiae quo veniam debitis blanditiis quas libero quos aspernatur iusto ab incidunt quod! Temporibus culpa vel sed dolor. Dignissimos doloribus unde eos architecto!',
        ];
        return view('home', $data);
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
