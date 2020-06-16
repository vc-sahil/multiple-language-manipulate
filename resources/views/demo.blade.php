<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
        }

    </style>
</head>

<body class="bg-grey-lightest">
    <div class="px-4 lg:max-w-4xl m-auto">
        <div class="flex mb-4">
            <div class="w-full text-center">
                <h2 class="text-center font-semibold mt-10 lg:mt-24 text-3xl text-red-light sm:mt-12">{{labelManipulate('magic-label','title')}}</h2>
                <div class="m-10 lg:m-10 text-center sm:m-8 lg:mt-4 lg:mb-16">
                    <lable class="pr-5 text-xl font-semibold text-red-light">{{labelManipulate('magic-label','current_language')}}
                        : {{$keySpecificValue}}</lable>
                </div>

                <div class="block mb-4 justify-around lg:flex">
                    <div class="rounded-lg w-full lg:w-2/5 border-2 border-grey-light">
                        <div class="w-full rounded-t-lg overflow-hidden bg-white p-10 justify-center">
                            <div class="w-full">
                                <h3 class="text-center text-xl font-semibold text-red-light pb-2 border-b-2 inline-block mb-6">
                                    {{labelManipulate('magic-label','select_drop_down')}}:
                                </h3>
                            </div>
                            <div class="w-full">
                                <select class="border border-red-light font-semibold bg-transparent p-2">
                                    <option value="" disabled selected>{{
                                        labelManipulate('magic-label','choose_your_option')
                                        }}</option>
                                    @if(count($industrySectors))
                                    @foreach($industrySectors as $key => $value)
                                    <option value="{{$key}}">{{ $value }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="bg-grey-lighter w-full overflow-hidden rounded-b-lg border-t border-grey-light p-4">
                            <pre class="w-full overflow-auto py-4 text-xs text-left text-blue-dark">
    <code>&lt;div class="<span class="text-purple-dark">w-full</span> <span class="text-purple-dark">min-w-sm</span> <span class="text-purple-dark">rounded-lg</span> <span class="text-purple-dark">overflow-hidden</span> <span class="text-purple-dark">shadow-lg</span> <span class="text-purple-dark">bg-white</span> <span class="text-purple-dark">p-10</span> <span class="text-purple-dark">justify-center</span>"&gt;
        &lt;div class="<span class="text-purple-dark">w-full</span>"&gt;
            &lt;h3 class="<span class="text-purple-dark">text-center</span> <span class="text-purple-dark">text-xl</span> <span class="text-purple-dark">font-semibold</span> <span class="text-purple-dark">text-red-light</span> <span class="text-purple-dark">pb-2</span> <span class="text-purple-dark">border-b-2</span> <span class="text-purple-dark">inline-block</span> <span class="text-purple-dark">mb-6</span>"&gt;<span class="text-black">{{labelManipulate('magic-label','select_drop_down')}}:</span>&lt;/h3&gt;
        &lt;/div&gt;    
        &lt;div class="<span class="text-purple-dark">w-full</span>"&gt;
            &lt;select class="<span class="text-purple-dark">border</span> <span class="text-purple-dark">border-red-light</span> <span class="text-purple-dark">font-semibold</span> <span class="text-purple-dark">bg-transparent</span> <span class="text-purple-dark">p-2</span>"&gt;
                &lt;option value="" disabled selected&gt;<span class="text-black">{{labelManipulate('magic-label','choose_your_option')}}</span>&lt;/option&gt;
            @if(count($industrySectors))@foreach($industrySectors as $key => $value)
    &lt;option value="{{$key}}"><span class="text-black">{{ $value }}</span>&gt;&lt;/option&gt;
            @endforeach @endif
&lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
                                    </code>
                                    </pre>
                        </div>
                    </div>
                    <div class="rounded-lg w-full lg:w-2/5 border-2 border-grey-light mt-4 lg:mt-0">
                        <div class="w-full rounded-t-lg overflow-hidden bg-white p-10 content-center">
                            <h3 class="text-center text-xl font-semibold text-red-light pb-2 border-b-2 inline-block mb-6">{{
                                labelManipulate('magic-label','industry_sector') }}</h3>
                            <ul class="bg-white block text-left w-full">
                                @if(count($industrySectors))
                                @foreach($industrySectors as $key => $value)
                                <li class="text-base font-semibold text-black leading-normal">{{$value}}</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="bg-grey-lighter rounded-b-lg w-full overflow-hidden border-t border-grey-light p-4">
                            <pre class="w-full overflow-auto py-5 text-xs text-left rounded-b-lg text-blue-dark">
    <code>&lt;div class="<span class="text-purple-dark">w-full</span> <span class="text-purple-dark">rounded-lg</span> <span class="text-purple-dark">overflow-hidden</span> <span class="text-purple-dark">shadow-lg</span> <span class="text-purple-dark">bg-white</span> <span class="text-purple-dark">p-10</span> <span class="text-purple-dark">content-center</span>"&gt;
        &lt;h3 class="<span class="text-purple-dark">text-center</span> <span class="text-purple-dark">text-xl</span> <span class="text-purple-dark">font-semibold</span> <span class="text-purple-dark">text-red-light</span> <span class="text-purple-dark">pb-2</span> <span class="text-purple-dark">border-b-2</span> <span class="text-purple-dark">inline-block</span> <span class="text-purple-dark">mb-6</span>"&gt;<span class="text-black">{{
            labelManipulate('magic-label','industry_sector') }}</span>&lt;/h3&gt;
        &lt;ul class="<span class="text-purple-dark">bg-white</span> <span class="text-purple-dark">block</span> <span class="text-purple-dark">text-left</span> <span class="text-purple-dark">w-full</span>"&gt;
@if(count($industrySectors))
        @foreach($industrySectors as $key => $value)
    &lt;li class="<span class="text-purple-dark">text-base</span> <span class="text-purple-dark">font-semibold</span> <span class="text-purple-dark">text-black</span> <span class="text-purple-dark">leading-normal</span>"&gt;<span class="text-black">{{$value}}</span>&lt;/li&gt;
        @endforeach
@endif&lt;/ul&gt;
    &lt;/div&gt;
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</body>

</html>
