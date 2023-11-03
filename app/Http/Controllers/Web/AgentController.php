<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\CommentRequest;
use App\Models\Agent;
use App\Models\Comment;
use App\Services\WebServices\AgentService;
use App\Services\WebServices\CommentService;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    protected $agentService;

    public function __construct(AgentService $agentService)
    {
        $this->agentService = $agentService;

    }

    public function index()
    {
        $agents = Agent::Paginate(12);
        return view('web.agents.index',compact('agents'));
    }
}
