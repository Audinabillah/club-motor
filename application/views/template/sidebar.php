<!-- sidebar -->
<div>
    <div class="sidebar bg-primary" id="sidebar">
        <ul>
            <li>
                <a class="text-white" href="<?= base_url('side/article') ?>">
                    <i class="far fa-newspaper mr-2"></i>
                    Article
                </a>
            </li>
            <li>
                <a class="text-white" href="<?= base_url('side/event') ?>">
                    <i class="bi bi-bookmark mr-2"></i>
                    Event
                </a>
            </li>
            <li>
                <a class="text-white" href="<?= base_url('side/galery') ?>">
                    <i class="fas fa-camera-retro mr-2"></i>
                    Galery
                </a>
            </li>
            <li>
                <a class="text-white" href="<?= base_url('side/member') ?>">
                    <i class="bi bi-bicycle mr-2"></i>
                    Member
                </a>
            </li>
            <li>
                <a class="text-white" href="#"> <i class="bi bi-menu-button-wide mr-2"></i><span> Login </span><i class="bi bi-chevron-down ms-auto mr-2"></i> </a>
                <ul>
                    <li>
                        <a class="text-white" href="<?= base_url('auth') ?>"> <i class="fas fa-sign-in-alt mr-2"></i><span> Sign in </span> </a>
                    </li>
                    <li>
                        <a class="text-white" href="<?= base_url('auth/registration') ?>"> <i class="fas fa-user-plus mr-2"></i><span> Sign up </span> </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end sidebar -->