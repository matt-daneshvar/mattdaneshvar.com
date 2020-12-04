<h2 class="text-xl uppercase mt-8 mb-1">Experience</h2>

@component('resume.partials.item', [
        'period' => '2012 - 2014',
        'title' => 'Web Developer',
        'organization' => '4 Thirteen Group'
    ])
    <p>
        I started working at
        <a href="https://4thirteen.com.my" target="_blank">4 Thirteen</a>
        as a part-time developer just before my undergraduate studies began.
    </p>

    <p>
        My interest was always beyond being a 9-5 employee; together with the team we fixed mistakes in our
        accounting department, built a new rate card, moved all our clients to cloud, and started shipping our very
        first internal products.
    </p>

    <p>
        One of those products was
        <a href="https://scismic.com" target="_blank">Scismic</a>
        - A social media platform for people in life
        sciences that we built while partnering with 3 Harvard graduates.
        This particular project earned us a special status given by the Malaysian government that’d make it a lot
        easier for us to hire foreign staff and exempt us from paying taxes for our tech services for the next 5 years.
    </p>
@endcomponent


@component('resume.partials.item', [
    'period' => '2014 - Current',
    'title' => 'Head of Technology',
    'organization' => '4 Thirteen Group'
])
    <p>
        After about 2 years at 4 Thirteen, I became the Head of the Technology department, the department that
        we eventually turned into a business division in 2017 and branded as
        <a href="https://code413.io" target="_blank">Code413</a>.
    </p>
    <p>
        Together with this small team at Code413,
        we’ve delivered a few dozens of web projects, created 10s of MVPs, and launched a few of our own products.
    </p>
    <p>
        My average day is 80% making and promoting our products,
        and 20% getting work done for our clients.
    </p>
@endcomponent

@component('resume.partials.item', [
    'period' => '2019 - Current',
    'title' => 'Founder',
    'organization' => 'Race.my'
])
    <p>
        Out of my frustration with the online experience every time I registered for a race,
        I started creating a new sports registration platform as my side project; Once an MVP was ready, we brought the
        project under the 4 Thirteen umbrella, we called it
        <a href="https://race.my" target="_blank">Race.my</a>,
        and accelerated it with more resources as our new venture.
    </p>
    <p>
        My role at Race.my involves a combination of business development, customer support,
        and a good amount of coding.
    </p>
@endcomponent

@component('resume.partials.item', [
    'period' => '2011 - Current',
    'title' => 'Freelance Web Developer',
])
    <p>
        Ever since I learned a little bit about writing code for web, I started picking up freelance projects
        to expose myself to more business domains and ideas.
        I've built and maintained websites and web apps for businesses in education, fashion, food and beverage, fintech, and a few other industries.
    </p>
@endcomponent
