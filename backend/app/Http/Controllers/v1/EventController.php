<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Usecases\EventUsecaseInterface;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private EventUsecaseInterface $eventUsecase;

    public function __construct(EventUsecaseInterface $eventUsecase)
    {
        $this->eventUsecase = $eventUsecase;
    }

    public function index()
    {
        // code
    }

    public function store()
    {
        // code
    }

    public function created()
    {
        // code
    }

    public function joined()
    {
        // code
    }

    public function mypage()
    {
        // code
    }

    public function show()
    {
        // code
    }

    public function update()
    {
        // code
    }

    public function destroy()
    {
        // code
    }

    public function detail()
    {
        // code
    }
}
