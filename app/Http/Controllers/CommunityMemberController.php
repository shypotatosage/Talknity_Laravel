<?php

namespace App\Http\Controllers;

use App\Models\CommunityMember;
use App\Http\Requests\StoreCommunityMemberRequest;
use App\Http\Requests\UpdateCommunityMemberRequest;

class CommunityMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCommunityMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunityMemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommunityMember  $communityMember
     * @return \Illuminate\Http\Response
     */
    public function show(CommunityMember $communityMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommunityMember  $communityMember
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunityMember $communityMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommunityMemberRequest  $request
     * @param  \App\Models\CommunityMember  $communityMember
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunityMemberRequest $request, CommunityMember $communityMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommunityMember  $communityMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommunityMember $communityMember)
    {
        //
    }
}
