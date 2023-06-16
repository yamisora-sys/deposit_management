<div>
    <!-- search user -->
    <div class="form-group">
        <label for="searchTerm">Tìm kiếm khách hàng</label>
        <input wire:model="searchTerm" type="text" class="form-control" id="searchTerm" placeholder="Nhập số điện thoại, CMND hoặc họ tên" wire:keydown.enter="searchUser">
    </div>
    <!-- end search user -->
    <!-- list user -->
    <div class="form-group">
        <!-- display listusre -->
        @foreach ($user as $index => $item)
        <!-- <section class="vh-100" style="background-color: #9de2ff;"> -->
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-7 col-xl-5">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex text-black">
                                <div class="flex-shrink-0">
                                    <img src="{{$item->avatar}}" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">{{$item->fullname}}</h5>
                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$item->role->title}}</p>
                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">Ngày sinh: {{$item->birthday}}</p>
                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">Địa chỉ: {{$item->address}}</p>
                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">Số điện thoại: {{$item->phone}}</p>
                                    <!-- <div class="d-flex justify-content-start rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                            <div>
                                                <p class="small text-muted mb-1">Articles</p>
                                                <p class="mb-0">41</p>
                                            </div>
                                            <div class="px-3">
                                                <p class="small text-muted mb-1">Followers</p>
                                                <p class="mb-0">976</p>
                                            </div>
                                            <div>
                                                <p class="small text-muted mb-1">Rating</p>
                                                <p class="mb-0">8.5</p>
                                            </div>
                                        </div> -->
                                    <div class="d-flex pt-1">
                                        <a type="button" class="btn btn-outline-primary me-1 flex-grow-1" href="{{route('add-passbook', $item->id)}}">Mo So Tiet Kiem</a>
                                        <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                                        <!-- <button type="button" class="btn btn-primary flex-grow-1"><a href="/test/{{$item->id}}">Xem chi tiết</a></button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </section> -->
        @endforeach
    </div>
</div>