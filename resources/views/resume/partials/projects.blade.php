<h2 class="text-xl uppercase mt-8 mb-1">Projects</h2>

<div class="mb-8">
    <p class="mb-3">
        The three projects in this resume were specifically selected for my application for the <strong>Xyz</strong>
        position
        at <strong>Acme Inc.</strong>.
    </p>

    <p class="mb-6">
        For more projects, please visit <a href="">https://mattdaneshvar.com/projects</a>.
    </p>

    @include('resume.partials.project', [
        'name' => '1. Scismic (Web Application)',
        'role' => 'Lead Developer',
        'description' => 'Skills-based job matching platform for scientists by scientists.',
        'url' => 'www.scismic.com',
        'stack' => ['Laravel', 'jQuery', 'Webpack', 'Bootstrap', 'SASS']
    ])

    @include('resume.partials.project', [
        'name' => '2. Yoodo (Marketing Website & Community Board)',
        'role' => 'Lead Developer',
        'description' => 'The first fully-digital Malaysian telco.',
        'url' => 'www.yoodo.com.my',
        'stack' => ['WordPress', 'Zendesk', 'jQuery', 'Webpack', 'SASS']
    ])

    @include('resume.partials.project', [
        'name' => '3. Race.my (Web Application)',
        'role' => 'Lead Developer',
        'description' => 'Ticketing platform for sport events.',
        'url' => 'www.race.my',
        'stack' => ['Laravel', 'Vue', 'Webpack', 'Bootstrap', 'SASS']
    ])
</div>
