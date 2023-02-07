<div class="sidebar position-fixed">
    <div class="sidebar-title">
        <h2 class="text-light" style="margin-left: 25%; margin-top: 20px;">JobQ</h2>
        <hr style="color: white;">
    </div>
    <div class="sidebar-body text-light">
        <ul id="item-sidebar">
            <li <?= $this->uri->segment(2) == 'Dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
                <a href="/Mitra/Dashboard" type="button"><i class="fa-solid fa-gauge" style="margin-right: 20px;"></i>Dashboard</a>
            </li>
            <li <?= $this->uri->segment(2) == 'Vacancies' ? 'class="active"' : ''?>>
                <a href="/Mitra/Vacancies" type="button"><i class="fa-solid fa-folder-open" style="margin-right: 20px;"></i>Job vacancies</a>
            </li>
            <li <?= $this->uri->segment(2) == 'GeneralInformation' ? 'class="active"' : ''?>>
                <a href="/Mitra/GeneralInformation" type="button"><i class="fa-solid fa-circle-info" style="margin-right: 20px;"></i>General Information</a>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer ms-4">
        <a href="#" class="text-light" style="text-decoration: none;"><i class="fa-solid fa-right-from-bracket logout" style="margin-right: 20px;"></i>LogOut</a>
    </div>
</div>