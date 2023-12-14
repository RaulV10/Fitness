<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tecolote Tech</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Link to the Font Awesome icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer src="{{ asset('js/script.js') }}"></script>
</head>

<body class="dark:bg-darkBg bg-lightBg">
    <!-- LIGHT DARK TOGGLE BTN START -->
    <div class="fixed top-[18%] translate-y-[-18%] right-0 z-50">
        <button
            class="bg-dark dark:bg-gray-100 w-[50px] h-[50px] dark:text-black text-white flex justify-center items-center rounded-l-lg"
            id="light__to--dark">
            <i id="moonIcon" class="text-3xl -rotate-[20deg] fa-solid fa-moon"></i>
            <i id="sunIcon" class="text-3xl -rotate-[20deg] fa-solid fa-sun"></i>
        </button>
    </div>
    <!-- LIGHT DARK TOGGLE BTN END -->

    <!-- HEADER -->
    <header
        class="bg-transparent border-b border-solid border-[#373434] dark:border-gray-500 z-50 w-full backdrop-blur-md fixed top-0 left-0">
        <div class="container flex justify-between items-center relative py-6 md:py-0">
            <!-- LOGO -->
            <a href="/" class="w-44 sm:w-fit">
                <img src="{{ asset('images/logo/firma.svg') }}" width="250px" height="140px" alt="Logo" />
            </a>
            <!-- LOGO -->
        </div>
    </header>
    <!-- HEADER -->

    <!-- GET QUOTATION FORM SATRT -->
    <div
        class="align-bottom text-left overflow-hidden sm:align-middle sm:max-w-4xl sm:w-full mx-auto relative px-6 pt-[176px] pb-24">
        <div class="sm:p-12 p-6 pt-14 bg-white dark:bg-dark rounded-lg shadow-md">
            <!-- TITLE START -->
            <h2 class="sm:text-4xl text-3xl leading-6 font-bold text-center text-primary mb-4">
                Fitness Planner
            </h2>
            <p class="sm:text-lg text-base text-center sm:mb-12 mb-6 text-gray-500 dark:text-gray-200">
                FILL THE FORM BELOW TO GET YOUR CUSTOMIZED WORKOUT PROGRAM MADE BY AI
            </p>
            <!-- TITLE END -->

            <form method="POST" action="{{ route('openai') }}">
                @csrf
                <div class="grid sm:grid-cols-2 md:gap-8 gap-6 text-slate-500 dark:text-slate-300">
                    <!-- HEIGHT INPUT -->
                    <div>
                        <label for="height" class="block text-sm font-medium leading-6">
                            What is your height? (In CM)
                        </label>
                        <div class="mt-2">
                            <input id="height" name="height" type="number" placeholder="178"
                                class="dark:bg-slate-900 block w-full rounded-md border-0 py-2.5 px-3 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-slate-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-500"
                                required />
                        </div>
                    </div>
                    <!-- HEIGHT INPUT -->

                    <!-- WEIGHT INPUT -->
                    <div>
                        <label for="weight" class="block text-sm font-medium leading-6">
                            What is your weight? (In KG)
                        </label>
                        <div class="mt-2">
                            <input id="weight" name="weight" type="number" placeholder="85"
                                class="dark:bg-slate-900 block w-full rounded-md border-0 py-2.5 px-3 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-slate-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-500"
                                required />
                        </div>
                    </div>
                    <!-- WEIGHT INPUT -->

                    <!-- GENDER INPUT -->
                    <div>
                        <label for="gender" class="block text-sm font-medium leading-6">
                            What is your gender?
                        </label>
                        <div class="mt-2">
                            <select id="gender" name="gender"
                                class="bg-gray-50 text-gray-600 text-sm rounded-md block w-full px-2.5 py-3.5 dark:bg-slate-900 border-0 dark:placeholder-gray-400 dark:text-gray-200 ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary transition-all duration-500">
                                <option selected disabled class="text-gray-300">
                                    Select an option
                                </option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- GENDER INPUT -->

                    <!-- AGE INPUT -->
                    <div>
                        <label for="age" class="block text-sm font-medium leading-6">
                            What is your age? (In Years)
                        </label>
                        <div class="mt-2">
                            <input id="age" name="age" type="number" placeholder="25"
                                class="dark:bg-slate-900 block w-full rounded-md border-0 py-2.5 px-3 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-slate-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-500"
                                required />
                        </div>
                    </div>
                    <!-- AGE INPUT -->

                    <!-- DAYS PER WEEK INPUT -->
                    <div>
                        <label for="daysPerWeek" class="block text-sm font-medium leading-6">
                            How many days per week are you willing to commit to exercise?
                        </label>
                        <div class="mt-2">
                            <input id="daysPerWeek" name="daysPerWeek" type="number" placeholder="3" max="4"
                                class="dark:bg-slate-900 block w-full rounded-md border-0 py-2.5 px-3 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-slate-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-500"
                                required />
                        </div>
                    </div>
                    <!-- DAYS PER WEEK INPUT -->

                    <!-- HOURS INPUT -->
                    <div>
                        <label for="hoursPerDay" class="block text-sm font-medium leading-6">
                            How much time can you dedicate to exercise on those days? (In Hours)
                        </label>
                        <div class="mt-2">
                            <input id="hoursPerDay" name="hoursPerDay" type="number" placeholder="1" max="2"
                                class="dark:bg-slate-900 block w-full rounded-md border-0 py-2.5 px-3 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-slate-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-500"
                                required />
                        </div>
                    </div>
                    <!-- HOURS INPUT -->

                    <!-- EXERCISE TYPE INPUT -->
                    <div>
                        <label for="exerciseType" class="block text-sm font-medium leading-6">
                            What is your exercise type?
                        </label>
                        <div class="mt-2">
                            <select id="exerciseType" name="exerciseType"
                                class="bg-gray-50 text-gray-600 text-sm rounded-md block w-full px-2.5 py-3.5 dark:bg-slate-900 border-0 dark:placeholder-gray-400 dark:text-gray-200 ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary transition-all duration-500">
                                <option selected disabled class="text-gray-300">
                                    Select an option
                                </option>
                                <option value="With gym or fitness equipment">With gym or fitness equipment</option>
                                <option value="Bodyweight exercises">Bodyweight exercises</option>
                            </select>
                        </div>
                    </div>
                    <!-- EXERCISE TYPE INPUT -->

                    <!-- LEVEL OF PHYSICAL ACTIVITY INPUT -->
                    <div>
                        <label for="levelOfPhysicalActivity" class="block text-sm font-medium leading-6">
                            What is your level of physical activity?
                        </label>
                        <div class="mt-2">
                            <select id="levelOfPhysicalActivity" name="levelOfPhysicalActivity"
                                class="bg-gray-50 text-gray-600 text-sm rounded-md block w-full px-2.5 py-3.5 dark:bg-slate-900 border-0 dark:placeholder-gray-400 dark:text-gray-200 ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary transition-all duration-500">
                                <option selected disabled class="text-gray-300">
                                    Select an option
                                </option>
                                <option value="sedentary">Sedentary</option>
                                <option value="light">Light</option>
                                <option value="moderate">Moderate</option>
                                <option value="high">High</option>
                            </select>
                        </div>
                    </div>
                    <!-- LEVEL OF PHYSICAL ACTIVITY INPUT -->

                    <!-- FITNESS GOALS INPUT -->
                    <div>
                        <label for="fitnessGoals" class="block text-sm font-medium leading-6">
                            What are your fitness goals?
                        </label>
                        <div class="mt-2">
                            <select id="fitnessGoals" name="fitnessGoals"
                                class="bg-gray-50 text-gray-600 text-sm rounded-md block w-full px-2.5 py-3.5 dark:bg-slate-900 border-0 dark:placeholder-gray-400 dark:text-gray-200 ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary transition-all duration-500">
                                <option selected disabled class="text-gray-300">
                                    Select an option
                                </option>
                                <option value="Lose Weight">Lose Weight</option>
                                <option value="Build Muscle">Build Muscle</option>
                                <option value="Improve Endurance">Improve Endurance</option>
                                <option value="General Fitness">General Fitness</option>
                            </select>
                        </div>
                    </div>
                    <!-- FITNESS GOALS INPUT -->

                    <!-- FITNESS LEVEL INPUT -->
                    <div>
                        <label for="trainingKnowledge" class="block text-sm font-medium leading-6">
                            What is your training knowledge?
                        </label>
                        <div class="mt-2">
                            <select id="trainingKnowledge" name="trainingKnowledge"
                                class="bg-gray-50 text-gray-600 text-sm rounded-md block w-full px-2.5 py-3.5 dark:bg-slate-900 border-0 dark:placeholder-gray-400 dark:text-gray-200 ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary transition-all duration-500">
                                <option selected disabled class="text-gray-300">
                                    Select an option
                                </option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>
                    </div>
                    <!-- FITNESS LEVEL INPUT -->

                    <!-- DIETARY PREFERENCES INPUT -->
                    <div>
                        <label for="dietaryPreferences" class="block text-sm font-medium leading-6">
                            Any specific dietary preferences or restrictions?
                        </label>
                        <div class="mt-2">
                            <input id="dietaryPreferences" name="dietaryPreferences" type="text"
                                placeholder="Vegetarian, Vegan, Gluten-free, etc."
                                class="dark:bg-slate-900 block w-full rounded-md border-0 py-2.5 px-3 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-slate-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary sm:text-sm sm:leading-6 transition-all duration-500" />
                        </div>
                    </div>
                    <!-- DIETARY PREFERENCES INPUT -->

                    <!-- BODY TYPE INPUT -->
                    <div>
                        <label for="bodyType" class="block text-sm font-medium leading-6">
                            What is your body type?
                        </label>
                        <div class="mt-2">
                            <select id="bodyType" name="bodyType"
                                class="bg-gray-50 text-gray-600 text-sm rounded-md block w-full px-2.5 py-3.5 dark:bg-slate-900 border-0 dark:placeholder-gray-400 dark:text-gray-200 ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-primary dark:focus:ring-primary transition-all duration-500">
                                <option selected disabled class="text-gray-300">
                                    Select an option
                                </option>
                                <option value="ectomorph">Ectomorph</option>
                                <option value="mesomorph">Mesomorph</option>
                                <option value="endomorph">Endomorph</option>
                                <option value="combination">Combination</option>
                            </select>
                        </div>
                    </div>
                    <!-- BODY TYPE INPUT -->

                </div>

                <!-- PHYSICAL LIMITATIONS INPUT -->
                <div class="mt-8">
                    <label for="physicalLimitations" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Do you have any physical limitations or issues that might affect your ability to exercise?
                    </label>
                    <textarea id="physicalLimitations" name="physicalLimitations"
                        class="block p-2.5 max-h-20 min-h-[80px] w-full text-sm text-gray-900 bg-gray-50 bottom-0 rounded-lg ring-1 ring-inset ring-gray-300 focus:ring-primary focus:ring-2 focus:ring-inset dark:bg-slate-900 dark:ring-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary transition-all duration-500"
                        placeholder=""></textarea>
                </div>
                <!-- PHYSICAL LIMITATIONS INPUT -->

                <div class="mt-8">
                    <!-- ADDITIONAL COMMENTS INPUT -->
                    <div>
                        <label for="additionalComments" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Any additional comments or preferences for your fitness plan?
                        </label>
                        <div class="mt-2">
                            <textarea id="additionalComments" name="additionalComments"
                                class="block p-2.5 max-h-20 min-h-[80px] w-full text-sm text-gray-900 bg-gray-50 bottom-0 rounded-lg ring-1 ring-inset ring-gray-300 focus:ring-primary focus:ring-2 focus:ring-inset dark:bg-slate-900 dark:ring-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary transition-all duration-500"
                                placeholder="Feel free to share any specific preferences or information..."></textarea>
                        </div>
                    </div>
                    <!-- ADDITIONAL COMMENTS INPUT -->
                </div>

                <!-- DISCLAIMER MESSAGE -->
                <div class="mt-8 text-sm text-gray-600 dark:text-gray-300">
                    <p>
                        Note: This personalized fitness plan is provided for reference purposes only and cannot replace
                        the guidance of a qualified fitness coach or healthcare professional. Consult with a
                        professional before starting any new exercise program or making significant changes to your
                        lifestyle.
                    </p>
                </div>
                <!-- DISCLAIMER MESSAGE -->

                <!-- SUBMIT BUTTON -->
                <div class="flex items-center gap-8 mt-8">
                    <button type="submit"
                        class="flex justify-center rounded-md shadow-md px-8 py-2 w-fit text-lg text-slate-50 font-semibold focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-primary hover:bg-primary focus-visible:outline-primary active:scale-95 transition-all duration-500">
                        Submit
                    </button>
                    <!-- SUBMIT BUTTON -->
                </div>
            </form>
        </div>
    </div>
    <!-- GET QUOTATION FORM END -->
</body>

</html>
