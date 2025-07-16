
@include('admin.header')

                <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="container">
               <p><strong class="mr-1">Cards</strong>can be organized into Masonry-like columns with just CSS by wrapping them in<code>.card-columns.</code>Cards are built with CSS column properties instead of flexbox for easier alignment. Cards are ordered from top to bottom and left to right.</p>
                    <div class="card-columns">
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="img/mediterranean-bowl.jpg" style="width:450px; height:350px;" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title that wraps to a new line</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="img/healthy_bowl01.jpg" style="width:450px; height:350px;" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><span class="text-sm text-muted">Last updated 3 mins ago</span></p>
                            </div>
                        </div>

                        <div class="card mb-4"> 
                            <img class="card-img-top img-fluid" src="img/healthy_bowl02.jpg" style="width:450px; height:350px;" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><span class="text-sm text-muted">Last updated 3 mins ago</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

@include('admin.footer')
