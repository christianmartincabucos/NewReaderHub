<template>
      <section class="container card-wrapper my-4">
            <!--Grid row-->
        <div class="row">

        <!--Grid column-->
        <div class="col-md-2 mb-4">

            <ul class="nav md-pills pills-light d-flex flex-column card-gray rounded" style="height:570px;">
            <li class="nav-item">
                <a class="rounded nav-link text-left active" data-toggle="tab" href="#panel11" role="tab">General</a>
            </li>
            <li class="nav-item">
                <a class="rounded nav-link text-left" data-toggle="tab" href="#panel12" role="tab">Security</a>
            </li>
            <li class="nav-item">
                <a class="rounded nav-link text-left" data-toggle="tab" href="#panel13" role="tab">Privacy</a>
            </li>
            <li class="nav-item">
                <a class="rounded nav-link text-left" data-toggle="tab" href="#panel14" role="tab">Tagging</a>
            </li>
            <li class="nav-item">
                <a class="rounded nav-link text-left" data-toggle="tab" href="#panel14" role="tab">Location</a>
            </li>
            <li class="nav-item">
                <a class="rounded nav-link text-left" data-toggle="tab" href="#panel14" role="tab">Feed Preference</a>
            </li>
            <li class="nav-item">
                <a class="rounded nav-link text-left" data-toggle="tab" href="#panel14" role="tab">Delete Account</a>
            </li>
            </ul>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4 card-gray rounded">

            <!-- Tab panels -->
            <div class="tab-content pt-0">

            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                <br>

                <div class="d-flex justify-content-between pl-3">
                    <h5>Name</h5>
                    <div class="d-flex justify-content-start pr-2">
                        <h6 class="pr-3">John Doe</h6>
                        <a class="text-white"><i class="fas fa-ellipsis-h"></i></a>
                    </div>
                </div>
                <div class="d-flex justify-content-between pl-3">
                    <h5>Username</h5>
                    <div class="d-flex justify-content-start pr-2">
                        <h6 class="pr-3">newreaderhub.com/johndoe123</h6>
                        <a class="text-white"><i class="fas fa-ellipsis-h"></i></a>
                    </div>
                </div>
                <div class="d-flex justify-content-between pl-3">
                    <h5>Email</h5>
                    <div class="d-flex justify-content-start pr-2">
                        <h6 class="pr-3">johndoe@gmail.com</h6>
                        <a class="text-white"><i class="fas fa-ellipsis-h"></i></a>
                    </div>
                </div>
                <div class="d-flex justify-content-between pl-3">
                    <h5>Mobile</h5>
                    <div class="d-flex justify-content-start pr-2">
                        <h6 class="pr-3">+124567890</h6>
                        <a class="text-white"><i class="fas fa-ellipsis-h"></i></a>
                    </div>
                </div>
            </div>
            <!--/.Panel 1-->

            <!--Panel 2-->
            <div class="tab-pane fade" id="panel12" role="tabpanel">
                <br>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                porro voluptate odit minima.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                porro voluptate odit minima.</p>

            </div>
            <!--/.Panel 2-->

            <!--Panel 3-->
            <div class="tab-pane fade" id="panel13" role="tabpanel">
                <br>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                porro voluptate odit minima.</p>

            </div>
            <!--/.Panel 3-->

            <!--Panel 4-->
            <div class="tab-pane fade" id="panel14" role="tabpanel">
                <br>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                porro voluptate odit minima.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                porro voluptate odit minima.</p>

            </div>
            <!--/.Panel 4-->

            </div>


        </div>
        <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
</template>
<style scoped>
.nav-link{
    padding:0rem 0rem 0rem 0.5rem!important;
}
.nav-item:hover{
    background-color: transparent!important;
}
.md-pills li{
    padding:0.3rem!important;
}
</style>
<script>
export default {

}
</script>
