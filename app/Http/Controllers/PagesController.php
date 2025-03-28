<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    public function index(): Factory|View|Application
    {
        $experiences = collect(config('personal.experiences'))->filter(function ($experience) {
            return collect($experience['positions'])->filter(function ($title) {
                    return $title['startedAt'] <= now();
                })->count() > 0;
        })->map(function ($experience) {
            return [
                'company' => $experience['company'],
                'positions' => collect($experience['positions'])->filter(function ($title) {
                    return $title['startedAt'] <= now();
                })->map(function ($title) {
                    return [
                        'name' => $title['name'],
                        'type' => $title['type'],
                        'location' => $title['location'],
                        'startedAt' => $title['startedAt']->format('M Y'),
                        'endedAt' => $this->getEndDate($title['endedAt']),
                        'duration' => $this->getDuration($title['startedAt'], $title['endedAt'])
                    ];
                })
            ];
        });

        $educations = collect(config('personal.educations'))->filter(function ($education) {
            return $education['startedAt'] <= now();
        })->map(function ($education) {
            return [
                'school' => $education['school'],
                'study' => $education['study'],
                'degree' => $education['degree'],
                'startedAt' => $education['startedAt']->format('M Y'),
                'endedAt' => $education['endedAt']?->format('M Y') ?? trans('messages.present'),
            ];
        });

        return view('pages.personal.index')->with([
            'experiences' => $experiences,
            'educations' => $educations,
            'projects' => config('personal.projects'),
        ]);
    }

    public function sitemap(Request $request): Response
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'));

        foreach ($sitemap->getTags() as $tag) {
            $tag->setLastModificationDate(now());
        }

        return $sitemap->toResponse($request);
    }

    private function getEndDate($endedAt)
    {
        if ($endedAt == null || $endedAt > now()) {
            return trans('messages.present');
        }

        return $endedAt->format('M Y');
    }

    private function getDuration($start, $end): string
    {
        $start = ($start ?? now())->startOfMonth();
        $end = (($end == null || $end > now()) ? now() : $end)->endOfMonth()->addDay();

        $diff = $start->diff($end);

        $results = [];
        if ($diff->y > 0) {
            $results[] = trans_choice('messages.years', $diff->y, ['years' => $diff->y]);
        }
        if ($diff->m > 0) {
            $results[] = trans_choice('messages.months', $diff->m, ['months' => $diff->m]);
        }

        return implode(' ', $results);
    }
}
