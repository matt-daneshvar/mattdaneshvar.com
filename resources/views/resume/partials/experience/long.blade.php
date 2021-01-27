<h2 class="text-xl uppercase mt-8 mb-1">Experience</h2>

@component('resume.partials.item', [
        'period' => '2012 - 2014',
        'title' => 'Web Developer',
        'organization' => '4 Thirteen Group'
    ])
    <p class="mt-2">
        I started working at
        <a href="https://4thirteen.com.my" target="_blank">4 Thirteen</a>
        as a part-time developer just before my undergraduate studies began.
    </p>

    <p>
        Being part of an agency, I dealt with more than a handful of projects every year, but I also did my best to
        stay involved in every other part of our business operation.
    </p>

    <p>
        This included projects beyond web development:
        creating a new rate card, fixing mistakes in our accounting system, moving our clients to the cloud, and
        shipping our very first internal products.
    </p>

    <p>
        One of those products was
        <a href="https://scismic.com" target="_blank">Scismic</a>
        — A social media platform for people in life
        sciences that we built while partnering with 3 Harvard graduates.
        This was a project that earned us a
        <a href="https://mdec.my/what-we-offer/msc-malaysia/" target="_blank">special status</a>
        awarded by the Malaysian government that’d make it a lot
        easier for us to hire foreign staff and exempt us from paying taxes for our tech services for the next 5 years.
    </p>
@endcomponent


@component('resume.partials.item', [
    'period' => '2014 - Current',
    'title' => 'Head of Technology',
    'organization' => '4 Thirteen Group'
])
    <p class="mt-2">
        After about 2 years at 4 Thirteen, I became the Head of the Technology department — the department that
        we eventually turned into a business division in 2017 and branded as
        <a href="https://code413.io" target="_blank">Code413</a>.
    </p>
    <p>
        Together with this small team at Code413,
        we’ve delivered a few dozens of web projects, created 10s of MVPs, and launched a few of our own products.
    </p>
    <p>
        My average day is 70% making and promoting our portfolio products,
        and 30% managing work related to our clients.
    </p>
@endcomponent

@component('resume.partials.item', [
    'period' => '2019 - Current',
    'title' => 'Founder',
    'organization' => 'Race.my'
])
    <p class="mt-2">
        Out of my frustration with the online experience every time I registered for a race,
        I started creating a new sports registration platform as my side project. We eventually brought the
        project under the 4 Thirteen umbrella and called it
        <a href="https://race.my" target="_blank">Race.my</a>.
    </p>
    <p>
        My role at Race.my involves a combination of business development, customer support,
        and a good amount of coding.
    </p>
@endcomponent

@component('resume.partials.item', [
    'title' => 'Freelance Web Developer',
])
    <p>
        Ever since I learned about writing code for the web, I started picking up freelance projects
        to expose myself to more business domains and ideas.
        I've built and maintained websites and web apps for businesses in education, fashion, food and beverage, fintech, and a few other industries.
    </p>
@endcomponent
