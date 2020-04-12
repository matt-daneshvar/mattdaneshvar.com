@extends('layouts.master')

@section('title', 'Reads')

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6">

        <p class="text-justify">
            Here I'll be listing my <strong>most recent reads</strong>,
            hopefully (and eventually) together with some thoughts on each book.
            I'm loosely ordering them based on the time I started reading each with the most recent ones at the top.
            My current top 5 titles are marked with a <span class="text-primary">★</span>.
        </p>

        <p class="text-justify mb-10">
            I've been thinking of keeping track of these for myself for the longest time,
            but didn't really know the right place to do it.
            If you know a platform or a community to keep this list in a better shape, please point me there!
        </p>

        @include('reads.partials.book', [
           'title' => 'Zero to One',
           'author' => 'Peter Thiel, Blake Masters',
        ])

        @include('reads.partials.book', [
           'title' => 'Building a StoryBrand: Clarify Your Message So Customers Will Listen',
           'author' => 'Donald Miller',
        ])

        @include('reads.partials.book', [
           'title' => '7 Habits of Highly Effective People',
           'author' => 'Stephen Covey',
        ])

        @include('reads.partials.book', [
           'title' => 'Utopia For Realists',
           'author' => 'Rutger Bregman',
           'current' => true
        ])

        @include('reads.partials.book', [
           'title' => 'Rich Dad Poor Dad',
           'author' => 'Robert Kiyosaki'
        ])

        @include('reads.partials.book', [
            'title' => 'Remote: Office Not Required',
            'author' => 'Jason Fried, David Heinemeier Hansson',
            'star' => true
        ])

        @include('reads.partials.book', [
            'title' => 'Factfulness',
            'author' => 'Hans Rosling, Ola Rosling, Anna Rosling Rönnlund',
            'star' => true
        ])

        @include('reads.partials.book', [
            'title' => 'It Doesn\'t Have to Be Crazy at Work',
            'author' => 'Jason Fried, David Heinemeier Hansson',
            'star' => true
        ])

        @include('reads.partials.book', [
           'title' => 'Originals',
           'author' => 'Adam Grant',
        ])

        @include('reads.partials.book', [
            'title' => 'Men Are From Mars, Women Are From Venus',
            'author' => 'John Gray',
        ])

        @include('reads.partials.book', [
            'title' => 'Way of the Wolf',
            'author' => 'Jordan Belfort',
        ])

        @include('reads.partials.book', [
           'title' => 'Communicate to Influence',
           'author' => 'Ben Decker, Kelly Decker',
       ])

        @include('reads.partials.book', [
            'title' => 'Life Without Limits',
            'author' => 'Nick Vujicic',
        ])

        @include('reads.partials.book', [
            'title' => 'Man\'s Search For Meaning',
            'author' => 'Viktor Frankl',
            'star' => true
        ])

        @include('reads.partials.book', [
            'title' => 'Start With Why',
            'author' => 'Simon Sinek',
        ])

        @include('reads.partials.book', [
            'title' => 'Creativity Inc',
            'author' => 'Ed Catmull',
            'star' => true
        ])

        @include('reads.partials.book', [
            'title' => 'Sometimes You Win, Sometimes You Learn',
            'author' => 'John Maxwell',
        ])

        @include('reads.partials.book', [
            'title' => 'Built To Last',
            'author' => 'James C. Collins, Jerry I. Porras',
        ])

        @include('reads.partials.book', [
            'title' => 'Great By Choice',
            'author' => 'James C. Collins',
        ])

        @include('reads.partials.book', [
            'title' => '5 Levels of Leadership',
            'author' => 'John Maxwell',
        ])

        @include('reads.partials.book', [
            'title' => '15 Individual\'s Laws of Growth',
            'author' => 'John Maxwell',
        ])

        @include('reads.partials.book', [
            'title' => 'Groupon\'s Biggest Deal Ever',
            'author' => 'Frank Sennett',
        ])

        @include('reads.partials.book', [
            'title' => 'Good Strategy Bad Strategy',
            'author' => 'Richard Rumelt',
        ])

        @include('reads.partials.book', [
            'title' => 'Good To Great',
            'author' => 'James C. Collins',
        ])

        @include('reads.partials.book', [
            'title' => 'Start Something That Matters',
            'author' => 'Blake Mycoskie',
        ])

        @include('reads.partials.book', [
            'title' => 'The Complete 101 Collection By John Maxwell',
            'author' => 'John Maxwell',
        ])

        @include('reads.partials.book', [
           'title' => 'Delivering Happiness',
           'author' => 'Tony Hsieh',
       ])
    </div>
@stop

