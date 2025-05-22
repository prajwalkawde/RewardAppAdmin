
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

    <!-- Javascript Assets -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body x-data class="is-header-blur" x-bind="$store.global.documentBody">

    <main class="main-content pos-app pb-6" style="display:flex;justify-content:center;">
      <div class="mt-3 col-12 container" style="max-width: 500px;">
        <div class="col-span-12 sm:col-span-6 lg:col-span-8">
            
      @if(session('status-alert'))
        <div class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5 sess_msg">
        {{ session('status-alert') }}
        </div>
        @elseif (session('status-success'))
        <div class="alert flex rounded-lg bg-success px-4 py-4 text-white sm:px-5 mb-3 sess_msg">
          {{ session('status-success') }}
        </div>
        @endif

          <div style="margin-top: 5px;" class="swiper" x-init="$nextTick(()=>$el._x_swiper= new Swiper($el,{  slidesPerView: 'auto', spaceBetween: 14,navigation:{nextEl:'.next-btn',prevEl:'.prev-btn'}}))" >
          <div class="flex items-center justify-between">
            
          </div>
        </div>

        <div class="card w-full p-4" x-data="pages.initCreditCard" style="justify-content: center;margin-top: 20px;">

            <p class="text-base font-medium mt-2 text-slate-700" >
            Verification Page
            </p>
            <p class="max-w-xl mt-1">
            
            <form action="" method="POST" class="mt-5">
            @csrf
            <div class="space-y-4">
              <label class="block">
                <span>Email:</span>
                 <input
                  class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                  placeholder="email"
                  type="text"
                  name="email"
                  value="{{ $email }}" readonly
                  required
                />
              </label>
          
                <label class="block">
                <span>Verification Code:</span>
                 <input
                  class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                  placeholder="code"
                  type="text"
                  name="code"
                  required
                />
              </label>

                <button name="submit_for_del" type="submit" class="btn mt-3 w-full bg-primary font-medium text-white acdel-d hover:bg-primary-focus focus:bg-primary-focus 
                active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Verify</button>
     
 
              </div>
            </div>
        </form>

       </div>


        </div>

      </div>
    </main>
 
  </body>
</html>
