@extends('bend.layouts.master')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-edit"></i> Add New Post</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Posts</li>
        <li class="breadcrumb-item"><a href="#">Add New Post</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-8 col-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input class="form-control" type="text" placeholder="Write Your Title" name="title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Sub Title</label>
                                <input class="form-control" type="text" placeholder="Write Your Sub Title"
                                    name="sub_title">
                            </div>
                        </div>
                    </div>
                    <div class="content_area mb-4">
                        <textarea name="post_content" id="post_content"></textarea>
                    </div>

                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label">Post Excerpt</label>
                                <textarea class="form-control" rows="3" placeholder="Write Your Excerpt"
                                    name="post_excerpt" id="post_excerpt"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-12">
                    <div class="tile">
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit" name="publish" value="publish">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Publish
                            </button>
                            <button class="btn btn-primary" type="submit" name="draft" value="draft">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Draft
                            </button>
                        </div>
                    </div>

                    <div class="tile">
                        <h5>Select Category</h5>
                        <div class="tile-footer"></div>
                        <div class="tile-body">
                            <div class="form-group">
                                <div class="form-check sm_category_body">
                                    <label class="form-check-label d-block">
                                        <input class="form-check-input" type="checkbox" name="gender">Category One
                                    </label>
                                    <label class="form-check-label d-block">
                                        <input class="form-check-input" type="checkbox" name="gender">Category Two
                                    </label>
                                    <label class="form-check-label d-block">
                                        <input class="form-check-input" type="checkbox" name="gender">Category Three
                                    </label>
                                    <label class="form-check-label d-block">
                                        <input class="form-check-input" type="checkbox" name="gender">Category Three
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile">
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label" data-toggle="modal" data-target="#post_thumbnail">
                                    Upload Your Thumbnail
                                </label>
                            </div>
                            <!-- The Modal -->
                            <div class="modal" id="post_thumbnail">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal Heading</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, fuga
                                            autem iusto molestias necessitatibus similique a, sed excepturi illum
                                            provident ipsum in. Debitis qui laudantium vel quo itaque illum, sed porro
                                            odit dolor accusantium. Aut accusamus labore omnis aperiam? Velit deserunt
                                            distinctio harum animi, maiores placeat. Consectetur vel repellat laboriosam
                                            fuga non quod vitae asperiores rem earum magni? Nobis veritatis, doloribus,
                                            et nemo, recusandae quae doloremque deserunt dolor perferendis quo commodi
                                            consectetur? Vero cupiditate doloribus doloremque laborum obcaecati veniam
                                            dolor culpa natus minus. Consequuntur non officia consectetur blanditiis
                                            ratione ad ex quas doloribus voluptatem, molestiae inventore nihil eum
                                            placeat, vero tempora nemo assumenda alias vel. Cumque maiores ducimus quasi
                                            praesentium voluptatibus deleniti magnam doloribus magni quos officia, optio
                                            quibusdam saepe repudiandae iusto quia! Cumque, tenetur, eveniet quo impedit
                                            doloribus aliquid aperiam tempora perspiciatis sequi non similique
                                            voluptatum commodi adipisci vero nemo fuga rerum delectus nihil veniam quod
                                            vitae ullam aliquam consequuntur. Veniam ipsum odit iusto maiores nihil
                                            consequatur amet neque sequi delectus? Minima unde neque minus pariatur
                                            accusamus, voluptatem cumque cupiditate doloremque? Maxime quasi impedit
                                            quae, consequatur nemo eius velit magni necessitatibus. Excepturi veritatis
                                            maiores sapiente? Incidunt maxime accusamus modi voluptas! Quas iure iusto
                                            assumenda ut. Odio veniam dolore ab reprehenderit vitae, ullam quae commodi
                                            repellat, consequuntur blanditiis sunt praesentium accusamus? Veritatis qui,
                                            impedit eveniet quasi magni molestiae quis delectus magnam reiciendis nisi
                                            incidunt provident nobis ullam aspernatur odit minima quibusdam? Nostrum
                                            illum quidem mollitia veniam deleniti aperiam, unde ratione atque, tenetur
                                            recusandae impedit commodi neque. Deserunt, sapiente repellat aut nam
                                            incidunt eaque hic, excepturi quia corporis quasi exercitationem quae
                                            laborum pariatur harum? Eaque, accusantium eius? Sit molestiae, aperiam
                                            accusantium iusto dolores nobis deserunt mollitia, impedit provident qui
                                            inventore odio quam, laboriosam veritatis incidunt at illum aspernatur sed
                                            quia nihil. Rem, vel quo! Obcaecati eveniet voluptates et asperiores dolorum
                                            magnam fugit molestias numquam voluptatibus, hic laborum dolor! Tempora,
                                            officiis! Ad animi aliquid quis possimus repellendus a dicta esse, tenetur
                                            enim porro. Iusto eaque autem iste aliquam sed. Tenetur vero, porro, sint
                                            sequi voluptatibus at aliquid magni necessitatibus, ab ducimus voluptas
                                            possimus rem temporibus nesciunt excepturi atque corporis ipsum repellendus
                                            ratione! Est, explicabo. Ducimus aliquam facilis voluptatem hic, porro esse
                                            accusantium mollitia eaque nisi harum tempore laboriosam iure reiciendis
                                            delectus numquam explicabo animi, impedit corrupti tenetur odit voluptas
                                            modi? Rem nam pariatur aliquid esse architecto reiciendis quis magni nemo,
                                            magnam soluta officiis quae minus sit explicabo molestias debitis vel
                                            similique minima sunt dolore? Ullam, aperiam officia illo nemo id provident!
                                            Labore ratione eius distinctio, vero magni minima cum suscipit in aspernatur
                                            reiciendis? Voluptate et, nam consequuntur perspiciatis rem praesentium
                                            nostrum? Rerum facere, obcaecati voluptatem aliquam nemo minima! Laudantium
                                            aliquid praesentium aperiam id officia eaque veniam dolores harum in magni
                                            maiores exercitationem eius alias iste quasi nihil, veritatis laboriosam a
                                            inventore eos? Fugit modi, libero alias unde illum fuga facilis laboriosam
                                            expedita iusto cum. Dignissimos hic quisquam provident ex, explicabo,
                                            architecto, ut doloremque id blanditiis et deserunt rerum consequatur
                                            tenetur aut repellendus molestiae. Esse, cupiditate! Aliquam recusandae
                                            iusto placeat, saepe tempora consectetur magni sit eum, totam vero nostrum
                                            animi. Itaque ea deleniti recusandae consectetur autem voluptatem mollitia
                                            rem corporis eos at consequatur inventore corrupti rerum quos sit iusto
                                            deserunt, quasi exercitationem obcaecati? Doloribus at animi corporis itaque
                                            beatae quod aut maiores? Qui voluptatibus neque iure corrupti nulla, minima
                                            possimus optio illo unde est corporis impedit itaque maiores, molestias odit
                                            consectetur voluptate accusamus nihil sapiente iste velit sit fuga! Fugiat
                                            vero exercitationem laboriosam earum sint corrupti quia praesentium
                                            repellat, natus libero ducimus. Dolor, amet eum eveniet aliquam corrupti
                                            unde consectetur officia nemo quod repellat quos, incidunt quam sapiente
                                            temporibus explicabo adipisci quidem illum tenetur voluptas ipsam facilis
                                            molestiae laboriosam nostrum. Hic, necessitatibus dolorem neque molestiae
                                            aliquid expedita excepturi earum porro, laboriosam cumque tempora sint
                                            consequatur, ducimus voluptatibus. Architecto modi sed nobis provident
                                            possimus nostrum repellat, deleniti dolore qui sit, odit ducimus dolores
                                            minima perferendis blanditiis ipsum omnis. Odit aspernatur unde molestiae
                                            cupiditate, quo consequatur delectus ab quas voluptas sed et labore enim
                                            eaque quae ipsum deleniti possimus atque harum? Labore, possimus tempore
                                            quam modi molestiae numquam, aut saepe quaerat unde culpa delectus maiores
                                            dicta porro error libero tempora aliquid corporis alias commodi. Doloribus,
                                            voluptas. Aperiam corrupti alias quam autem sed doloribus iusto doloremque
                                            repellat eligendi voluptatum porro placeat excepturi id soluta odit eum
                                            molestias quas tempora, quidem beatae at. Culpa repellendus nobis nisi
                                            accusamus officia dolorem explicabo vero nemo consequatur, dolor suscipit
                                            quis aliquid placeat, saepe ducimus aperiam quas sequi hic qui ullam minima
                                            autem tenetur. Exercitationem perspiciatis culpa dolor laborum adipisci qui,
                                            sit eligendi quo natus deserunt soluta molestias ducimus nemo aspernatur,
                                            obcaecati optio mollitia ipsam maxime ullam nisi delectus similique tempore
                                            nobis! Ratione iure quia dolor eum voluptas at exercitationem. Magni quo
                                            cumque consectetur doloremque unde? Ducimus labore error ut temporibus
                                            laudantium vero possimus eum iste. Asperiores minima necessitatibus magnam,
                                            consectetur ex explicabo impedit autem nostrum deleniti assumenda, odit
                                            praesentium molestias corporis, magni dolor architecto. Distinctio tempora
                                            totam accusantium recusandae sunt sequi consequuntur optio molestiae cum
                                            soluta nam eligendi dolorum minus ab unde quo culpa veritatis possimus
                                            assumenda, amet saepe nulla vitae. Atque quas sunt eligendi, laborum
                                            praesentium quis aspernatur quod cumque voluptates repudiandae blanditiis
                                            autem! Reiciendis quidem voluptatibus quos sit itaque quod maiores debitis
                                            ipsa! Nostrum veniam, nam ullam distinctio tempora vel inventore, deleniti
                                            unde quasi a praesentium molestias sequi! Voluptatibus quas sequi dicta
                                            error beatae distinctio laboriosam dolores asperiores aut esse a, id debitis
                                            voluptate architecto sint voluptatum fugit? Atque fugit iure reiciendis
                                            deleniti voluptates. Eveniet error hic ipsa quasi, qui dolore, fugiat vel
                                            quisquam illum corporis placeat quaerat doloremque obcaecati quod. Et
                                            debitis impedit qui quis laborum earum odit, aliquam distinctio repellat,
                                            voluptatum sit enim nostrum amet autem perspiciatis nam dolorum voluptates
                                            illo suscipit itaque illum maxime quod sint? Fuga accusamus optio odio
                                            voluptates nostrum quos maiores rerum aliquam! Iste voluptates officia est
                                            alias unde necessitatibus maxime expedita fugiat labore rem illo harum
                                            totam, nisi culpa provident repellat ducimus ab exercitationem sequi ratione
                                            hic? Cupiditate perferendis at laboriosam blanditiis nostrum beatae itaque
                                            expedita maxime. Assumenda facere quaerat cumque.
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection