<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\AgentContactRequest;
use App\Http\Requests\Web\CommentRequest;
use App\Models\Agent;
use App\Models\AgentContact;
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
        return view('web.agents.index', compact('agents'));
    }

    public function agentDetails($id)
    {
        $agent = Agent::findorfail($id);
        return view('web.agents.agent-details', compact('agent'));
    }

    public function agentContact(AgentContactRequest $request, $id)
    {
        $this->agentService->storeContact($request, $id);
        return back()->with('success', 'Your Message Has Been Sent Successfully');
    }

}
