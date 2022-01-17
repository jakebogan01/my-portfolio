<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Config;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class AppController extends Controller
{
    /**
     * @return Project[]|Collection
     */
    public static function getProjects(): Collection|array
    {
        return Project::all();
    }

    /**
     * @return Response
     */
    public function projects(): Response
    {
        return Inertia::render("Projects", [
            "projects" => $this->getProjects(),
        ]);
    }

    /**
     * @return Response
     */
    public function about(): Response
    {
        return Inertia::render("About", [
            "projects" => $this->getProjects(),
            "user" => User::find(1)->about,
        ]);
    }

    /**
     * @return Response
     */
    public function skills(): Response
    {
        $config = Config::get("skills");

        return Inertia::render("Skills", [
            "config" => $config,
            "projects" => $this->getProjects(),
            "user" => User::find(1)->skills,
        ]);
    }

    /**
     * @return Response
     */
    public function contact(): Response
    {
        return Inertia::render("Contact", [
            "projects" => $this->getProjects(),
            "user" => User::find(1)->about,
        ]);
    }

    /**
     * @param $slug
     * @return Response
     */
    public function show($slug): Response
    {
        $int = (int)$slug;
        $project = Project::findOrFail($int);

        return Inertia::render("Show", [
            "id" => $int,
            "project" => $project,
            "projects" => $this->getProjects(),
            "pageStatus" => true,
        ]);
    }

    /**
     * @return RedirectResponse
     */
    public function redirect(): RedirectResponse
    {
        return Redirect::route("projects");
    }
}
