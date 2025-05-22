
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
            Account Deletion
            </p>
            <p class="max-w-xl mt-1">
               <b class="text-error">Note:</b> Before deleting your {{ env('APP_NAME') }} account, code verification is required.
              </p>
            
            <form action="" method="POST" class="mt-8">
            @csrf
            <div class="space-y-4">
              <label class="block">
                <span>Email</span>
                 <input
                  class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                  placeholder="{{ env('APP_NAME') }} user email"
                  type="text"
                  name="email"
                  required
                />
              </label>
          
                <label class="block">
                <span class="mt-2">Reason for Delete:</span>
            
                <textarea
                  rows="4"
                  name="msg"
                  placeholder=" describe"
                  class="mt-2 form-textarea w-full resize-none rounded-lg bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-navy-900 dark:placeholder:text-navy-300"
                ></textarea>
              
              </label>

                <button name="submit_for_del" type="submit" class="btn mt-3 w-full bg-primary font-medium text-white acdel-d hover:bg-primary-focus focus:bg-primary-focus 
                active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Send Request</button>
     
 
              </div>
            </div>
        </form>

       </div>


        </div>

      </div>
    </main>

    <div id="x-teleport-target"></div>
    <script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
    
    var acdel = document.getElementsByClassName('acdel-d');
    var confirmIt = function (e) {
    if (!confirm('Are you sure do you want to send your account delete request?')) e.preventDefault();
    };
    for (var i = 0, l = acdel.length; i < l; i++) {
    acdel[i].addEventListener('click', confirmIt, false);
    }
    </script>
  </body>
</html>
