<?php

namespace AccessManager\Routers\Http\Controllers;


use AccessManager\Base\Http\Controller\AdminBaseController;
use AccessManager\Routers\Http\Requests\AddRouterRequest;
use AccessManager\Routers\Http\Requests\DeleteRouterRequest;
use AccessManager\Routers\Http\Requests\EditRouterRequest;
use AccessManager\Routers\Models\Router;
use Exception;

class RoutersController extends AdminBaseController
{
    public function getIndex()
    {
        $routers = Router::orderBy('nasname')->paginate(10);
        return view('Routers::index', compact('routers'));
    }

    public function getAdd()
    {
        return view('Routers::add-edit');
    }

    public function postAdd( AddRouterRequest $request )
    {
        try {
            Router::create( $request->all() );
            return redirect()->route('routers.index');
        }
        catch (Exception $e)
        {
            dd($e->getMessage());
        }
    }

    public function getEdit($id)
    {
        try {
            $router = Router::findOrFail($id);
            return view('Routers::add-edit', compact('router'));
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
        }
    }

    public function postEdit( EditRouterRequest $request )
    {
        try {
            $router = Router::findOrFail( $request->id );
            $router->fill($request->all());
            $router->save();
            return redirect()->route('routers.index');
        }
        catch (Exception $e)
        {
            dd($e->getMessage());
        }
    }

    public function postDelete( DeleteRouterRequest $request )
    {
        try {
            $router = Router::findOrFail($request->id);
            $router->delete();
            return redirect()->route('routers.index');
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
        }
    }
}