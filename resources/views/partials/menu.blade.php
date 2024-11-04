<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('sosial_medium_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.sosial-media.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sosial-media") || request()->is("admin/sosial-media/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-share-square c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.sosialMedium.title') }}
                </a>
            </li>
        @endcan
        @can('footer_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.footers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/footers") || request()->is("admin/footers/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-shoe-prints c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.footer.title') }}
                </a>
            </li>
        @endcan
        @can('homeinterface_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/herosections*") ? "c-show" : "" }} {{ request()->is("admin/capabilities*") ? "c-show" : "" }} {{ request()->is("admin/otomotives*") ? "c-show" : "" }} {{ request()->is("admin/tradings*") ? "c-show" : "" }} {{ request()->is("admin/contactpersons*") ? "c-show" : "" }} {{ request()->is("admin/galleries*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.homeinterface.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('herosection_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.herosections.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/herosections") || request()->is("admin/herosections/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.herosection.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('capabilitie_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.capabilities.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/capabilities") || request()->is("admin/capabilities/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.capability.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('otomotive_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.otomotives.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/otomotives") || request()->is("admin/otomotives/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.otomotive.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('trading_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tradings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tradings") || request()->is("admin/tradings/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.trading.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('contactperson_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contactpersons.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contactpersons") || request()->is("admin/contactpersons/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contactperson.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('gallery_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.galleries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/galleries") || request()->is("admin/galleries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-camera-retro c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.gallery.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('aboutinterface_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/abouts*") ? "c-show" : "" }} {{ request()->is("admin/visions*") ? "c-show" : "" }} {{ request()->is("admin/missions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.aboutinterface.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('about_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.abouts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/abouts") || request()->is("admin/abouts/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.about.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('vision_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.visions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/visions") || request()->is("admin/visions/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.vision.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('mission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.missions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/missions") || request()->is("admin/missions/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.mission.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('productmanaj_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/products*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon"></i>
                    {{ trans('cruds.productmanaj.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('product_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-product-hunt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.product.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('achievement_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/legalitys*") ? "c-show" : "" }} {{ request()->is("admin/testimonis*") ? "c-show" : "" }} {{ request()->is("admin/sertifikats*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon"></i>
                    {{ trans('cruds.achievement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('legalitas_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.legalitys.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/legalitys") || request()->is("admin/legalitys/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-table c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.legality.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('testimoni_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.testimonis.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/testimonis") || request()->is("admin/testimonis/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-book-open c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.testimoni.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('sertifikat_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sertifikats.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sertifikats") || request()->is("admin/sertifikats/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-book-open c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.sertifikat.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('manajclient_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/contacts*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon"></i>
                    {{ trans('cruds.manajclient.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('contactuse_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-table c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contact.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>