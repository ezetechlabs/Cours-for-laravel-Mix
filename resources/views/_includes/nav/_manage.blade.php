<aside class="menu m-t-5 m-l-5" style="background-color:#e6e6ff; height: 100vh; width: 200px; float: left;"  >
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
  <!-- li><a>Customers</a></li> -->
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a href="{{route('posts.index')}}">Blog Posts</a></li>
    <li><a href="{{route('users.index')}}">Gestion Utilisateurs</a></li>
     <li>
      <a class="is-active is-primary">Roles &amp; Permission</a>
      <ul>
        <li><a href="{{route('roles.index')}}">Roles</a></li>
        <li><a href="{{route('permissions.index')}}">Permission</a></li>
        <li><a>Infos Membre</a></li>
      </ul>
    </li>
   <!--  <li><a>Invitations</a></li>
    <li><a>Cloud Storage Environment Settings</a></li>
    <li><a>Authentication</a></li -->
  </ul>
  <!-- <p class="menu-label">
    Transactions
  </p>
  <ul class="menu-list">
    <li><a>Payments</a></li>
    <li><a>Transfers</a></li>
    <li><a>Balance</a></li>
  </ul> -->
</aside>