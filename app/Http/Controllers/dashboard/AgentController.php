<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AgentRequest;
use App\Models\Agent;
use App\Services\DashboardServices\AgentService;
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
      $agents = Agent::paginate(3);
      return view('dashboard.agents.index',compact('agents'));
    }

    public function create()
    {
       return view('dashboard.agents.create');
    }

    public function store(AgentRequest $request)
    {
        $this->agentService->store($request);

        return redirect()->route('dashboard.agents.index')->with('success_message','The agent has been created successfully');
    }

    public function edit(Agent $agent)
    {
        return view('dashboard.agents.edit',compact('agent'));
    }

    public function update(AgentRequest $request,Agent $agent)
    {

        $this->agentService->Update($agent, $request);

        return redirect()->route('dashboard.agents.index')->with('success_message','The agent has been Updated successfully');
    }

    public function show(Agent $agent)
    {
        return view('dashboard.agents.show',compact('agent'));
    }

    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('dashboard.agents.index')->with('success_message','The agent has been Deleted successfully');

    }


}
