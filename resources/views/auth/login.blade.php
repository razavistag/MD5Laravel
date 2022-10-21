<x-guest-layout>
        <x-slot name="logo">
      
        <!-- Session Status -->
        {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <header>
            <!-- login_section settings -->
            <style>
                /* Default height for small devices */
                #login_section {
                    height: 100vh;
                    /* Margin to fix overlapping fixed navbar */
                    /* margin-top: 150px; */
                }
    
                @media (max-width: 991px) {
                    #login_section {
                        /* Margin to fix overlapping fixed navbar */
                        margin-top: 45px;
                    }
                }
            </style>
    
    
    
            <!-- Background image -->
            <div id="login_section" 
                class="text-center bg-image shadow-1-strong" 
                style="
                background-image: url('https://wallpaperaccess.com/full/3632165.png');
                ">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white ">
    
                            {{-- <section> --}}
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xl-12 w-100">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                           
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <input 
                                                    type="email" 
                                                    id="email" 
                                                    class="form-control"
                                                    autocomplete="off"
                                                    name="email" 
                                                
                                                    style="
                                                    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC');
                                                    background-repeat: no-repeat;
                                                    background-attachment: scroll;
                                                    background-size: 16px 18px;
                                                    background-position: 98% 50%;
                                                    width:500px
                                                    " />
                                                <label class="form-label" for="email" style="margin-left: 0px">Email address</label>
                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px"></div>
                                                    <div class="form-notch-middle" style="width: 88.8px"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
    
                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <input 
                                                type="password" 
                                                id="password" 
                                                name="password"
                                                class="form-control"
                                                    autocomplete="off"
                                                    style="
                                                    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC');
                                                    background-repeat: no-repeat;
                                                    background-attachment: scroll;
                                                    background-size: 16px 18px;
                                                    background-position: 98% 50%;
                                                    " />
                                                <label class="form-label" for="password"
                                                    style="margin-left: 0px">Password</label>
                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px"></div>
                                                    <div class="form-notch-middle" style="width: 64px"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
    
                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                                Sign in
                                            </button>
    
                                            <!-- Register buttons -->
                                            <div class="text-center">
                                                <p>Not a member? <a href="/register">Register</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            {{-- </section> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background image -->
        </header>
</x-guest-layout>
