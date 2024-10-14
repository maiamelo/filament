<main class="px-4 sm:px-6 lg:px-auto lg:px-8 lg:py-20">

    <h1 class="text-xl font-semibold leading-7 text-gray-900"> Dados Gerais</h1>


    <div class="borde-t pt-6 mt-4"></div>

    <div class="max-auto max-w-2xl space-y-8 lg:mx-0 lg:max-w-none">
        <div>
            <h2>Perfil do Usuário {{ Auth::user()->name }}</h2>

            <p class="mt-1 text-sm leading-6 text-gray-600">Confira seus dados e altere caso necessário.</p>

            <dl class="mt-6 space-y-6 border-t border-gray-200 text-sm leading-6">
                <div class="pt-6 sm:flex">

                    <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">
                        Nome Completo

                    </dt>
                    <dd class="mt-1 flex justify-between sm:mt-0  sm:flex-auto">
                        <div class="flex w-full ">

                            <input type="text"
                                class=" w-full rounded-md border bg-white/5 px-2 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-1 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="Nome de fulano">

                        </div>
                    </dd>
                </div>
                <div class="pt-26 sm:flex">
                    <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">
                        Email

                    </dt>
                    <dd class="mt-1 flex justify-between sm:mt-0  sm:flex-auto">
                        <div class="flex w-full ">

                            <input type="text"
                                class=" w-full rounded-md border bg-white/5 px-2 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-1 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="teste@teste.com">

                        </div>
                    </dd>
                </div>
            </dl>

            </dt>
        </div>
    </div>
</main>
