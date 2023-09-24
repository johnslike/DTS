<ul class="flex flex-col md:flex-row px-4">
    <li>
      <a href="/login" class="block py-2 pr-4 pl-3">Sign in</a>
    </li>
    <li>
      <a href="/register" class="block py-2 pr-4 pl-3">Sign up</a>
    </li>
    <li>
        <form action="/logout" method="POST">
          @csrf
          <button href="/logout" class="block py-2 pr-4 pl-3">Logout</button>
        </form>
    </li>
  </ul>