@extends('layouts.app')
@section('main')
<div class="d-flex">
    <div class="w-100">
        @include('partials.navbar')
        <div class="d-flex container-xxl">
            @include('partials.sidebar')
            <div class="px-4 w-100">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="link-underline link-underline-opacity-0">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
                <div class="mt-4">
                    <ul class="nav nav-tabs gap-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active link-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                <div class="d-flex gap-2">
                                    <i class="bi bi-grid-1x2"></i>
                                    <div>Board</div>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link link-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                <div class="d-flex gap-2">
                                    <i class="bi bi-list-check"></i>
                                    <div>List</div>
                                </div>
                            </button>
                        </li>
                    </ul>
                    <div class="mt-4 d-flex">
                        <button class="btn background-primary border-0 text-light me-auto shadow-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-lg"></i> Add New Task</button>
                        <div>
                            <input class="form-control form-control py-2 rounded-pill ps-3" type="text" placeholder="Search Tasks" aria-label=".form-control-lg example">
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <div class="modal-title fs-5" id="staticBackdropLabel">Add New Task</div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-5">
                                    <div class="vstack gap-3">
                                        <div class="vstack gap-1">
                                            <label class="label-container text-secondary">Task</label>
                                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                        </div>
                                        <div class="vstack gap-1">
                                            <label class="label-container text-secondary">Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="vstack gap-1">
                                            <label class="label-container text-secondary">Priority level</label>
                                            <div class="card-option">
                                                <input type="radio" id="option1" name="payment" value="credit-card" checked>
                                                <label class="option1" for="option1">
                                                    <div>Low</div>
                                                </label>
                                                <input type="radio" id="option2" name="payment" value="paypal">
                                                <label class="option2" for="option2">
                                                    <div>Medium</div>
                                                </label>
                                                <input type="radio" id="option3" name="payment" value="bank-transfer">
                                                <label class="option3" for="option3">
                                                    <div>High</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="vstack gap-1">
                                            <label class="label-container text-secondary">Date</label>
                                            <div class="d-flex gap-3 align-items-center">
                                                <input class="form-control" type="date" placeholder="" aria-label="default input example">
                                                <div>-</div>
                                                <input class="form-control" type="date" placeholder="" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn background-secondary text-primary-custom rounded-pill fw-medium px-4" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn background-primary text-light rounded-pill px-4">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" style="width: 300px">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body vstack gap-1">
                                    <input type="radio" id="todo" name="status" class="status-option-modal">
                                    <label for="todo" class="status-card-modal status-card-todo" style="width: fit-content">
                                        <i class="bi bi-circle"></i> To-do
                                    </label>
                                    <input type="radio" id="onprogress" name="status" class="status-option-modal">
                                    <label for="onprogress" class="status-card-modal status-card-onprogress" style="width: fit-content">
                                        <i class="bi bi-arrow-clockwise"></i> On Progress
                                    </label>
                                    <input type="radio" id="done" name="status" class="status-option-modal">
                                    <label for="done" class="status-card-modal status-card-done" style="width: fit-content">
                                        <i class="bi bi-check-lg"></i> Done
                                    </label>
                                    <div class="d-flex justify-content-center">
                                        <a href="" class="link-secondary mt-3 link-underline link-underline-opacity-0" style="width: fit-content; font-size: 14px;"><i class="bi bi-pen"></i> Edit Task</a>
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="button" class="btn background-secondary text-primary-custom rounded-pill fw-medium px-4" data-bs-dismiss="modal" style="font-size: 14px">Cancel</button>
                                    <button type="button" class="btn background-primary text-light rounded-pill px-4" style="font-size: 14px">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content mt-5 pb-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="d-flex gap-3">
                                <div class="w-100">
                                    <div class="border-bottom d-flex align-items-center py-2 w-100 gap-2">
                                        <i class="bi bi-circle-fill" style="color: #0DA6EB; font-size: 12px;"></i>
                                        <div>To-do</div>
                                    </div>
                                    <a href="" class="link-underline link-underline-opacity-0 link-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="task-card mt-5 px-3 pe-4 py-4">
                                            <div class="priority-lvl-card px-2 py-1 mb-2 rounded" style="width: fit-content;">High</div>
                                            <div class="vstack gap-2">
                                                <div class="fw-medium link-dark">Set Up Development Environment</div>
                                                <div class="fw-light task-desc text-secondary">Prepare the technical environment where the website will be built.</div>
                                                <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                    <div>Configure web hosting and server settings</div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-circle"></i>
                                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia culpa aperiam!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="w-100">
                                    <div class="border-bottom d-flex align-items-center py-2 w-100 gap-2">
                                        <i class="bi bi-circle-fill" style="color: #0DA6EB; font-size: 12px;"></i>
                                        <div>On Progress</div>
                                    </div>
                                    <div class="mt-5 vstack gap-3">
                                        <div class="task-card px-3 pe-4 py-4">
                                            <div class="priority-lvl-card px-2 py-1 mb-3 rounded" style="width: fit-content;">High</div>
                                            <div class="vstack gap-2">
                                                <div class="fw-medium">Set Up Development Environment</div>
                                                <div class="fw-light task-desc text-secondary">Prepare the technical environment where the website will be built.</div>
                                                <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-circle"></i>
                                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia culpa aperiam!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-card px-3 pe-4 py-4">
                                            <div class="priority-lvl-card px-2 py-1 mb-3 rounded" style="width: fit-content;">High</div>
                                            <div class="vstack gap-2">
                                                <div class="fw-medium">Set Up Development Environment</div>
                                                <div class="fw-light task-desc text-secondary">Prepare the technical environment where the website will be built.</div>
                                                <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                    <div>Configure web hosting and server settings</div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-circle"></i>
                                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia culpa aperiam!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <div class="border-bottom d-flex align-items-center py-2 w-100 gap-2">
                                        <i class="bi bi-circle-fill" style="color: #0DA6EB; font-size: 12px;"></i>
                                        <div>Done</div>
                                    </div>
                                    <div class="mt-5 vstack gap-3">
                                        <div class="task-card px-3 pe-4 py-4">
                                            <div class="priority-lvl-card px-2 py-1 mb-3 rounded" style="width: fit-content;">High</div>
                                            <div class="vstack gap-2">
                                                <div class="fw-medium">Set Up Development Environment</div>
                                                <div class="fw-light task-desc text-secondary">Prepare the technical environment where the website will be built.</div>
                                                <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                            </div>
                                        </div>
                                        <div class="task-card px-3 pe-4 py-4">
                                            <div class="priority-lvl-card px-2 py-1 mb-3 rounded" style="width: fit-content;">High</div>
                                            <div class="vstack gap-2">
                                                <div class="fw-medium">Set Up Development Environment</div>
                                                <div class="fw-light task-desc text-secondary">Prepare the technical environment where the website will be built.</div>
                                                <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                    <div>Configure web hosting and server settings</div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                    <div>Configure web hosting and server settings</div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-start sub-task">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                    <div>Configure web hosting and server settings</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="vstack gap-2">
                                <div class="task-card px-5 pe-4 py-4">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="fw-medium">Set Up Development Environment</div>
                                            <div class="priority-lvl-card px-2 py-1 rounded me-auto" style="width: fit-content;">High</div>
                                            <div class="status-card status-card-done px-2 py-1 rounded" style="width: fit-content;"><i class="bi bi-check-lg"></i> Done</div>
                                        </div>
                                        <div class="fw-light task-desc text-secondary">Prepare the technical environment where the website will be built.</div>
                                        <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                    </div>
                                </div>
                                <div class="task-card px-5 pe-4 py-4">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="fw-medium">Set Up Development Environment</div>
                                            <div class="priority-lvl-card px-2 py-1 rounded me-auto" style="width: fit-content;">High</div>
                                            <div class="status-card status-card-onprogress px-2 py-1 rounded" style="width: fit-content;"><i class="bi bi-arrow-clockwise"></i> On Progress</div>
                                        </div>
                                        <div class="fw-light task-desc text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis fugiat esse quidem hic distinctio ab cum vitae maiores quae natus.</div>
                                        <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                    </div>
                                </div>
                                <div class="task-card px-5 pe-4 py-4">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="fw-medium">Set Up Development Environment</div>
                                            <div class="priority-lvl-card px-2 py-1 rounded me-auto" style="width: fit-content;">High</div>
                                            <div class="status-card status-card-todo px-2 py-1 rounded" style="width: fit-content;"><i class="bi bi-circle"></i> To-do</div>
                                        </div>
                                        <div class="fw-light task-desc text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum praesentium mollitia cumque magnam, aliquam voluptate pariatur eum esse?`</div>
                                        <div class="task-date fw-medium">Nov 2nd, 2024</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Ambil tab terakhir yang aktif dari localStorage
        let activeTab = localStorage.getItem("activeTab");

        if (activeTab) {
            let tabElement = document.querySelector(`button[data-bs-target="${activeTab}"]`);
            if (tabElement) {
                new bootstrap.Tab(tabElement).show();
            }
        }

        // Simpan tab yang diklik ke localStorage
        document.querySelectorAll('.nav-link').forEach(tab => {
            tab.addEventListener("click", function() {
                localStorage.setItem("activeTab", this.getAttribute("data-bs-target"));
            });
        });
    });

</script>

@endsection
