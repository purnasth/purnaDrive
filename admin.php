<?php
require_once './assets/php/session.php';
$username = $_SESSION['username'];
if (empty($username)) {
    header("Location:form.php");
}

echo '<link rel="stylesheet" href="./assets/css/style.css" />';
echo '<link rel="icon" href="./assets/icon/favicon.ico"/>';
echo ' <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
?>
<title>Purna Drive's Admin</title>

<body>
    <div id="drive">
        <header>
            <div class="details">
                <a href="index.php" target="_blank">
                    <button class="gallery-btn">
                    <i class="fa-solid fa-image"></i>
                    </button>
                </a>
                <a href="delete.php" target="_blank">
                    <button class="delete-btn">
                    <i class="fa-solid fa-trash-can"></i>
                    </button>
                </a>
            </div>
            <label for="">
                <a href="https://www.purnashrestha.com.np/" target="_blank">
                    <div class="handwriting">
                        <svg class="purna-svg" width="50px" viewBox="0 0 1820 650" xmlns="http://www.w3.org/2000/svg">
                            <clipPath id="clipPath19408">
                                <path d="m301.64 417.32t-1.4925-1.99q-1.7412-1.99-3.2337-4.7262-1.7412-2.4875-3.7312-6.2187-2.2387-3.7312-3.7312-8.9549-1.7412-5.2237-2.7362-10.696-4.7262-34.327 27.114-64.426 10.199-10.199 24.377-18.656 13.93-8.4574 23.134-12.189 8.9549-3.7312 21.392-7.9599 12.437-4.2287 12.686-4.2287 2.985-3.7312 7.7112-8.7062 4.4775-4.975 6.7162-7.4624 1.99-2.7362 5.97-8.9549 3.7312-6.2187 8.7062-15.671 49.75-95.022 80.594-146.76 9.2037-15.671 12.189-19.651 3.2337-4.2287 5.4724-4.2287 3.7312 0 4.975 2.985t-1.2437 5.2237q-3.4825 2.7362-25.372 41.79-21.89 38.805-42.287 76.614-20.397 37.561-20.397 38.556 0 0.74624 5.97-4.7262 5.97-5.7212 18.905-16.915 13.184-11.442 29.85-24.626 16.915-13.184 42.536-29.352 25.87-16.417 52.983-30.347 33.83-17.164 51.74-17.164 6.2187 0 8.4574 0.4975 2.4875 0.49749 5.2237 2.2387 3.7312 2.985 6.7162 7.9599 3.98 6.7162 1.4925 24.377-2.4875 17.412-10.945 38.556-4.2287 10.447-13.432 29.85-9.2037 19.402-13.93 26.616l-3.2337 5.7212 15.174 0.49749q14.925 0.4975 19.154 2.7362 3.2337 1.99 4.2287 4.2287t-0.24875 3.7312q-1.4925 0.74624-13.184-0.74625-10.696-1.2437-21.392-0.24874l-9.7012 0.99499-10.447 15.671q-26.616 39.302-62.187 74.624-35.571 35.571-70.644 57.958-11.442 6.9649-28.109 14.925-16.417 7.9599-27.86 11.691-19.651 6.4674-38.556 8.7062-19.154 2.4875-32.835 0-8.9549-1.4925-10.945-2.2387-0.99499-0.4975-2.2387 0.99499-1.4925 1.7412-3.98 6.4674-15.671 29.104-35.322 60.197-19.9 31.094-26.367 36.317-3.2337 2.985-5.2237 3.2337-1.99 0.24875-4.7262-1.7412-3.98-3.2337-1.7412-12.437 2.2387-8.9549 13.184-35.82 6.7162-17.164 14.676-34.576 7.9599-17.164 14.179-29.352 5.97-11.94 5.97-12.189zm-28.606 86.316q-0.99499 2.2387-2.4875 6.2187-6.4674 15.92-5.7212 16.169 0.24875 0.24875 1.99-1.99 2.2387-3.2337 9.9499-14.925 11.442-16.915 23.134-36.317 11.442-19.402 17.412-30.099 5.7212-10.447 5.7212-10.447 0.4975 0.24875-12.437-7.4624-0.99499-0.74624-1.2437-0.74624-1.99 3.2337-6.7162 12.935-4.975 9.9499-13.432 28.855-8.7062 19.154-16.169 37.81zm174.37-267.4q-13.184 11.94-18.905 18.159-5.4724 6.2187-9.2037 12.437-2.2387 3.7312-0.995 3.98t19.154-3.2337q56.715-11.194 149.25-20.646 22.387-1.99 24.377-3.98 2.985-4.2287 11.442-20.397 8.7062-16.417 13.432-27.611 11.691-26.865 16.169-46.516 4.7262-19.651 0.99499-26.616-6.965-15.174-62.187 12.437-77.112 39.8-143.53 101.99zm64.177 29.104q-32.586 4.4775-65.918 10.447-33.083 5.97-34.825 7.7112-0.49749 0.49749-25.124 47.262-13.432 26.119-26.865 51.74-13.432 25.621-17.91 34.576-4.7262 8.9549-4.7262 9.4524 0 1.99 9.4524 2.7362 9.2037 0.99499 22.387 0.24874 12.935-0.49749 22.139-2.4875 16.169-3.7312 38.058-13.184 21.89-9.2037 38.058-19.402 29.352-18.656 60.695-48.506 31.591-29.601 54.973-60.695 4.7262-6.2187 9.7012-13.184 4.975-7.2137 7.9599-11.94 3.2337-4.7262 2.985-4.975-0.74624-0.74625-34.576 3.2337-33.581 3.7312-56.466 6.9649zm-185.07 157.21q0.74625-0.24875 8.2087-13.681t17.661-32.586q9.9499-18.905 19.9-37.81 9.7012-18.905 16.417-32.337 6.4674-13.184 6.2187-13.184-0.99499 0-15.174 19.154-14.179 19.402-24.129 33.581-14.925 22.387-28.606 45.77-13.93 23.382-12.437 24.377 2.7362 2.2387 6.9649 4.7262 3.98 2.4875 4.975 1.99zm55.471-129.85q-0.74625-1.7412-27.114 10.945-37.312 18.159-51.491 44.028-14.179 26.119-1.7412 52.486 3.7312 8.2087 4.975 8.2087 0.4975 0 2.2387-3.2337 5.4725-12.437 25.372-43.531 19.9-30.845 35.322-51.242 6.4674-8.7062 9.7012-13.184 3.2337-4.2287 2.7362-4.4775z">
                                </path>
                                <path d="m720.04 310.86q-2.2387 0.74624-3.4825-1.4925-0.99499-2.4875 1.2437-7.9599 2.2387-5.4724 9.9499-19.402 13.681-27.362 11.442-33.83-1.99-4.975-4.975-5.97-1.2437-0.4975-1.2437 1.2437 0 0.99499-2.985 6.4674-2.985 5.4724-6.9649 11.94t-6.7162 9.7012q-11.94 14.925-22.139 14.427-10.199-0.4975-12.437-15.92l-0.74624-5.2237q-1.2437 0.49749-4.2287 2.7362-2.7362 1.99-5.7212 3.98-2.7362 1.7412-6.2187 3.2337-3.2337 1.7412-6.4674 1.4925-3.2337 0-5.7212-2.2387-5.4724-5.4724-0.49749-16.169 4.2287-10.696 10.199-10.696 4.4775 0 5.4724 2.7362 0.99499 2.4875-2.7362 5.4724-2.4875 1.99-4.4775 6.2187-1.99 3.98-1.2437 4.7262 0.4975 0.49749 5.97-3.2337 5.7212-3.7312 11.691-7.4624 6.2187-3.98 7.2137-3.98 2.4875 0 3.7312 2.4875 1.4925 2.2387 1.99 5.7212 0.4975 3.4825 0.74625 7.2137 0.24875 3.4825 0.99499 5.97 0.99499 2.2387 2.4875 2.2387 2.985 0 7.7112-4.2287 4.975-4.2287 9.2037-9.9499 2.7362-3.7312 5.7212-8.9549 3.2337-5.2237 5.4724-9.4524 2.2387-4.2287 2.2387-5.4725 0-1.4925-8.7062-5.7212-11.94-6.2187-15.671-12.935-3.4825-6.9649 1.7412-12.935 5.4724-6.2187 16.666-5.4724 11.442 0.49749 16.666 7.4624 2.2387 2.7362 2.985 6.7162 0.74624 3.7312 0.49749 6.4674-0.24874 2.4875-1.2437 6.2187-0.74624 3.7312-0.74624 3.98l5.2237 4.7262q7.9599 7.2137 6.4674 17.164-1.2437 9.7012-13.93 34.078-11.442 23.134-14.427 23.88zm-8.9549-93.778q2.985 2.985 7.9599 6.2187 5.2237 2.985 7.7112 2.985 0.99499 0 1.2437-0.4975 0.49749-0.49749 0.74624-1.7412 0.24875-1.4925-0.24875-3.98 0-5.7212-0.74624-7.2137-1.7412-3.2337-8.9549-3.4825-7.2137-0.49749-9.7012 2.4875-1.4925 1.99 1.99 5.2237z">
                                </path>
                                <path d="m821.03 254.15q15.174-7.4624 16.417-4.7262 0.24875 0.4975 0.24875 1.2437 0 5.4725-16.666 13.93-6.2187 2.985-10.945 4.4775-4.4775 1.2437-7.2137 0.995-2.7362-0.4975-4.7262-1.4925-1.99-1.2437-3.2337-2.7362-1.2437-1.7412-2.2387-3.2337-0.74624-1.7412-1.99-2.7362t-2.7362-0.99499q-3.98 0-10.696 3.7312-6.4674 3.7312-11.442 9.2037-4.975 5.4725-6.9649 6.2187-1.99 0.99499-3.98-0.99499-1.4925-1.7412-0.74625-5.2237 0.74625-3.4825 4.7262-12.437 3.2337-8.4574 4.7262-10.696 1.4925-2.4875 4.2287-2.4875 1.99 0 2.4875 0.99499 0.74625 0.99499 0.4975 2.985 0 1.99 0.24875 4.7262l5.2237-2.7362q17.661-8.4574 24.626 4.2287 1.99 4.4775 4.975 4.2287 2.985-0.49749 15.174-6.4674z">
                                </path>
                                <path d="m919.04 249.92q0.99499 2.2387-4.975 7.2137-5.7212 4.975-13.432 8.4574-5.4725 2.985-12.437 4.7262-6.7162 1.7412-8.9549 0.995-0.4975 0-2.2387-0.24875-1.4925-0.4975-2.2387-0.74625-0.4975-0.24874-1.99-0.74624-1.4925-0.74624-3.2337-1.7412-1.4925-1.2437-3.7312-2.985-0.24875-0.4975-0.99499-0.99499-3.98-3.4825-6.965-2.985-2.7362 0.24875-15.92 6.4674-1.2437 0.49749-1.99 0.74624-9.2037 4.2287-13.184 4.975-3.98 0.4975-7.2137-2.2387-2.985-2.985-0.74624-7.4624 2.2387-4.7262 10.696-12.935 18.905-17.412 25.87-9.4524 2.2387 1.99 0.99499 3.98-1.2437 1.7412-5.2237 2.7362-2.2387 0.24874-5.2237 1.7412-2.7362 1.4925-5.4725 3.7312-2.7362 1.99-4.7262 3.98-1.4925 1.99-0.99499 1.99 0.74624-0.24874 11.691-4.975 9.4524-4.2287 12.935-3.98 3.7312 0.24874 9.4524 4.975 6.965 6.4674 12.686 6.4674 5.97-0.24874 20.397-7.4624 10.199-4.975 13.184-5.7212 3.2337-0.74624 3.98 1.4925z">
                                </path>
                                <path d="m939.43 289.97q4.7262 3.4825 17.91 10.199 13.184 6.965 15.174 6.965 0.49749 0 24.626-10.447 40.048-19.402 73.132-31.84 33.084-12.686 51.988-15.422 6.2187-1.2437 7.9599-0.99499 1.99 0 3.2338 1.4925 1.4925 1.2437 1.4925 1.7412 0 0.4975-1.4925 1.4925-1.2438 1.4925-12.189 4.4775-21.144 4.975-55.222 18.656-34.078 13.93-57.71 25.124-23.631 11.442-23.631 12.189 2.4875 1.7412 5.4725 3.2337 6.4674 3.7312 14.925 10.447 8.7062 6.7162 14.179 12.437 28.855 31.84 11.442 86.564-16.417 53.481-80.843 110.2-40.048 35.073-78.604 57.958-38.556 23.134-65.918 28.109-7.9599 1.4925-11.194 1.4925-3.4825 0.24875-9.4524-0.49749-22.387-4.975-27.611-31.094-1.4925-8.7062-0.4975-25.372 0.74625-16.666 3.4825-27.362 16.169-64.177 62.684-118.9 46.516-54.725 121.89-97.26 2.4875-1.4925 5.4725-3.2337 2.985-1.7412 4.975-2.985 1.99-0.995 3.4825-1.99 1.4925-0.74624 1.99-0.99499 0.995-0.99499-3.7312-3.7312-2.2387-1.2437-5.4724-2.7362-12.189-6.2187-19.9-12.437t-12.935-15.174q-5.2237-8.7062-5.4724-19.402-0.24875-10.945 4.4775-25.87t15.174-33.83q14.427-25.87 40.795-51.988t50.496-38.556q11.442-5.7212 22.139-6.965 10.945-1.4925 16.169 1.7412 3.2338 2.2387 5.7212 7.2137 2.4875 4.7262 2.4875 9.2037 0 7.9599-5.7212 21.144-5.4724 13.184-15.174 28.109-9.4524 14.925-20.646 28.109-4.7262 5.2237-15.671 15.92-10.945 10.696-20.895 19.651-9.7012 8.9549-11.442 9.9499-2.2387 0.99499-4.2287 0-1.99-1.2437-1.99-3.4825 0-1.4925 26.367-27.611 17.164-16.915 23.382-23.88 6.2187-7.2137 12.437-16.915 10.448-15.174 15.671-27.114 3.9799-8.4574 5.2237-12.189 1.2437-3.98 1.4925-8.9549 0.7462-7.2137-0.995-9.7012-1.4925-2.7362-6.4675-2.7362-9.9499 0-24.626 7.7112-14.676 7.4624-30.845 20.646-15.92 12.935-29.104 28.606-23.382 26.865-36.068 55.968-12.686 28.855-8.2087 44.028 1.7412 5.2237 6.2187 11.194 4.7262 5.97 10.199 9.7012zm29.601 213.92q8.9549-8.9549 16.169-17.91 7.4624-8.7062 13.432-17.412t10.696-17.412 8.2087-17.661q3.7312-8.9549 5.9699-18.407 6.2187-22.139 2.7363-39.551-3.4825-17.412-14.925-30.347-11.442-12.935-32.088-23.382l-6.7162-3.4825q-1.7412 0.99499-12.686 6.9649-10.945 6.2187-24.129 13.681-13.184 7.7112-31.591 20.646-18.407 13.184-35.322 27.611-17.164 14.427-35.571 34.825-18.407 20.646-32.088 42.536-10.447 16.915-20.149 40.795-9.7012 23.88-13.681 42.038-2.2387 9.9499-2.2387 26.865 0 16.915 2.2387 22.387 3.98 11.194 12.686 15.422 5.4724 2.4875 15.671 1.7412 10.199-0.74624 20.646-4.2287 32.088-10.945 75.371-40.795t77.361-64.923z">
                                </path>
                                <path d="m1215.3 248.18q5.9699 0.74625-0.2488 7.9599-7.9599 8.9549-18.656 11.94-3.2337 0.74625-5.9699-0.74624-2.4875-1.4925-3.7313-3.4825-1.2437-1.99-2.4874-4.7262-1.2438-2.985-1.4925-2.985 0 0-1.7413 0.74624-1.4925 0.74625-3.9799 2.2387-2.4875 1.2437-5.97 3.7312-3.4825 2.2387-8.2087 5.97t-9.9499 8.4574-11.94 11.691q-6.7162 7.2137-13.432 15.422-8.7062 10.199-11.442 12.189-2.7362 1.99-5.9699 0.24875-3.4825-2.2387-0.995-10.945 2.4874-8.7062 14.179-35.073 4.7262-10.696 16.915-41.292 12.189-30.596 24.377-59.202 12.189-28.606 22.138-47.76 6.4675-12.437 8.2087-14.676 1.7413-2.4875 4.2287-2.4875 3.7313 0 3.7313 2.7362-0.2488 2.985-12.189 28.109-19.154 41.043-37.81 87.559-8.2087 20.397-15.671 37.81-7.4625 17.164-10.199 23.631-2.985 6.7162-2.985 7.2137 0 0.49749 4.2288-3.98 4.2287-4.2287 11.194-11.194 6.965-6.7162 14.676-13.681 7.7111-6.965 15.671-11.691 8.2087-4.975 13.681-4.975 6.4675 0 8.9549 7.2137 1.99 4.2287 3.4825 4.2287 1.2438 0 9.2037-4.975 8.2087-5.2237 10.199-5.2237z">
                                </path>
                                <path d="m1271.8 255.64q20.895-10.447 23.134-8.4574 0.7462 0.74624 0.7462 2.2387 0 2.4875-5.9699 6.4674-5.97 3.7312-20.646 11.194-15.174 7.2137-22.885 9.2037-7.4625 2.2387-12.189 0.49749-3.4825-1.4925-4.4775-4.975-0.7462-3.7312 1.2438-7.9599 0.4975-0.74625 0.995-1.7412t0.7462-1.4925q0.2488-0.49749 0.2488-0.49749 0-0.995-4.7262 0-4.7263 0.49749-8.2087-0.24875-3.2338-0.99499-5.2237-3.2337-1.4925-2.2387-1.4925-3.2337 0-1.2437 1.4925-4.975 2.4874-6.7162 6.9649-8.9549 4.4775-2.4875 6.7162 1.4925 0.4975 0.4975 0.4975 1.2437 0.2487 0.4975-0.2487 1.2437-0.2488 0.4975-0.995 1.4925-0.4975 0.99499-1.2438 1.7412-0.4975 0.4975-1.4925 1.7412t-1.7412 1.99q4.7262 0.74625 16.915-1.99 8.9549-2.2387 11.94-1.7412 2.9849 0.24875 3.4824 3.7312 0.2488 1.99-3.9799 5.7212-2.2388 1.4925-4.4775 3.4825-2.2387 1.7412-3.98 3.4825-1.4925 1.4925-2.4874 2.7362-0.995 1.2437-0.995 1.7412 0 1.2437 3.7312 0.49749 4.4774-0.99499 8.7062-2.7362 4.2287-1.99 19.9-9.7012z">
                                </path>
                                <path d="m1353.6 276.78q-4.4775 2.4875-8.7062 4.975-4.2287 2.7362-6.7162 4.2287-2.2387 1.4925-2.2387 1.99-0.995 1.2437-0.2488 3.98 0.7463 2.7362 0.995 7.4624 0.4975 4.7262 0.2488 9.2037 0 4.4775-2.4875 9.2037-2.2387 4.7262-6.7162 7.9599-4.4775 2.2387-12.437 2.4875-7.9599 0.49749-11.691-1.7412-6.2187-4.2287-6.2187-10.447 0-5.4725 4.4774-11.442 4.4775-5.7212 9.7012-9.7012 5.4724-3.98 9.4524-7.4624 4.2287-3.2337 3.7312-4.4775-0.2487-0.74624-0.7462-3.4825-0.2488-2.7362-0.7463-5.4725-0.2487-2.4875-0.4974-2.985 0 0-2.985 1.7412-2.985 1.7412-7.7112 4.2287-4.4775 2.4875-9.7012 4.975-4.9749 2.7362-10.199 4.4775-4.9749 1.99-7.9599 2.2387-7.9599 0.74624-11.194-4.4775-3.2338-4.975-0.4975-13.184 1.9899-5.2237 7.2136-12.686 5.2238-7.4624 9.2037-10.199 6.965-5.7212 12.935-3.2337 5.97 2.4875 3.7312 10.447-1.7412 5.97-10.199 13.93-8.2087 7.7112-11.94 6.7162-2.4875-0.74625-2.7363 1.4925-0.2487 1.2437 0.995 1.7412 2.985 0.99499 21.144-8.4574t25.124-15.92q16.417-14.427 23.631-12.686 2.7362 0.74624 2.7362 4.4775 0 4.2287-13.184 11.94-5.9699 3.2337-7.4624 5.97-1.4925 2.4875-1.2438 7.9599l0.4975 5.7212 8.9549-5.2237q12.189-7.4624 26.865-15.174 14.925-7.7112 16.169-7.7112 2.2387 0 2.4874 1.99 0.4975 1.7412-1.2437 3.4825-5.7212 4.7262-32.586 21.144zm-61.441-18.656q1.7413-1.99 1.4925-1.99-0.2487-0.4975-4.2287 3.98-2.7362 2.7362-2.4875 2.985 0.4975 0.4975 4.2288-3.7312 0.7462-0.49749 0.9949-1.2437zm12.935 56.466q0 3.2337 4.4775 4.2287 4.4775 0.995 9.9499-1.2437 4.2287-1.7412 5.97-5.2237 1.7412-3.2337 1.7412-9.2037 0-6.2187-0.995-7.7112-1.4925-1.4925-11.442 7.4624-9.7012 9.2037-9.7012 11.691z">
                                </path>
                                <path d="m1492.9 274.79q-4.7262 0-6.965-2.4875-2.2387-2.7362-3.2337-9.4524-0.4975-3.2337-16.666 14.179-5.2237 5.7212-10.199 11.691-20.646 26.865-26.616 26.865-5.4725 0-6.4675-3.98t1.2438-14.427q0.2487-1.7412 0.7462-3.98 0.4975-1.99 0.7463-3.2337 0.2487-0.995 0.2487-1.2437l-6.2187 8.7062q-1.4925 1.99-2.7362 4.2287-5.2237 7.4624-10.447 13.681-4.975 6.4674-9.4525 10.945-4.4774 4.7262-8.4574 7.2137-3.7312 2.7362-5.9699 2.7362-1.4925 0-4.975-3.4825-5.4725-4.975-5.4725-19.651-0.2487-14.676 3.2338-32.586 3.4824-17.661 7.7111-34.327 4.4775-16.666 7.96-28.606 3.7312-11.94 3.7312-12.189-1.4925-0.74625-8.4574-0.24875-6.7162 0.49749-16.169 1.2437-9.4525 0.74624-11.194 0.49749-3.2337-0.74624-3.7312-3.7312-0.4975-3.2337 2.7362-4.4775 2.4875-0.74624 41.79-4.2287 0.2487-0.49749 2.7362-7.2137 2.4875-6.7162 6.4674-16.915 4.2288-10.199 9.4525-21.89 5.2237-11.691 11.94-24.626 6.7162-13.184 13.184-23.134 1.2438-1.7412 2.4875-3.7312 1.4925-1.99 2.2387-2.985 0.995-1.2437 1.7413-2.4875 0.995-1.4925 1.4924-2.2387 0.4975-0.74624 0.995-1.4925 0.7463-0.99499 0.995-1.2437 0.4975-0.4975 0.995-0.74624 0.4975-0.4975 0.7463-0.74624 0.4975-0.24875 0.7462-0.4975 0.4975-0.24875 0.995-0.4975 2.4875-1.2437 4.975 0.4975 1.9899 1.2437 1.9899 2.985 0.2488 1.7412-1.4924 3.2337-3.2338 2.4875-12.189 16.915-8.9549 14.427-15.671 28.109-6.7162 13.432-15.92 35.571-9.2037 21.89-8.4574 22.636 0.4975 0.74624 24.128-0.24875 23.88-1.2437 24.129-1.99 0.7462 0 5.2237-11.691 3.2337-7.7112 8.7062-19.402 5.4724-11.691 10.696-21.89 5.2238-10.199 7.96-14.676 4.7262-7.2137 7.4624-8.9549 2.7362-1.99 5.7212 0.4975 2.7363 1.99 1.99 5.7212-1.7412 10.447-28.606 64.923l-2.4875 5.7212q7.7112 0 20.646 0 33.581 0 39.302 0.4975 5.7212 0.24875 6.2187 1.99 0.7462 1.99-1.4925 3.4825-5.2237 1.7412-32.586 2.985t-37.312 1.2437q-0.995 2.4875-5.4725 11.94-4.4774 9.4524-9.4524 20.397-4.7262 10.945-7.9599 21.144-2.985 8.9549-6.2187 19.9-3.2337 11.194-5.2237 18.407-1.7413 7.4624-1.4925 7.7112 0.2487 0.24875 2.985-3.2337 2.9849-3.2337 7.4624-9.2037 4.7262-5.97 9.9499-12.686 5.2237-6.4674 11.442-13.184 6.4675-6.7162 11.691-10.945 6.4674-4.975 10.447-3.7312 3.98 0.99499 3.98 8.4574 0 6.4674 1.4925 7.2137 1.7412 0.74625 8.4574-2.7362 5.9699-3.2337 13.93-8.7062 10.199-7.2137 10.447-0.99499 0 4.975-13.184 13.93-12.935 8.9549-20.149 8.9549zm-108.7 50.745q0.7462 0.99499 2.985-0.99499 2.4874-1.99 7.4624-7.2137 12.437-13.681 28.855-43.282 16.666-29.601 25.124-53.232 5.97-14.676 5.97-16.915-1.7413-0.4975-12.189-0.4975-10.199 0-22.387 0.74625-12.189 0.49749-12.935 1.2437-2.2387 2.7362-10.696 33.83-8.2086 30.845-10.696 46.018-1.4925 10.447-1.99 24.626-0.4975 14.179 0.4975 15.671z">
                                </path>
                                <path d="m1607.8 249.92q0.995 2.2387-4.975 7.2137-5.7212 4.975-13.432 8.4574-5.4724 2.985-12.437 4.7262-6.7162 1.7412-8.9549 0.995-0.4975 0-2.2387-0.24875-1.4925-0.4975-2.2388-0.74625-0.4975-0.24874-1.9899-0.74624-1.4925-0.74624-3.2338-1.7412-1.4925-1.2437-3.7312-2.985-0.2487-0.4975-0.995-0.99499-3.98-3.4825-6.9649-2.985-2.7363 0.24875-15.92 6.4674-1.2437 0.49749-1.99 0.74624-9.2037 4.2287-13.184 4.975-3.98 0.4975-7.2137-2.2387-2.985-2.985-0.7463-7.4624 2.2388-4.7262 10.696-12.935 18.905-17.412 25.87-9.4524 2.2387 1.99 0.995 3.98-1.2438 1.7412-5.2237 2.7362-2.2388 0.24874-5.2237 1.7412-2.7363 1.4925-5.4725 3.7312-2.7362 1.99-4.7262 3.98-1.4925 1.99-0.995 1.99 0.7463-0.24874 11.691-4.975 9.4524-4.2287 12.935-3.98 3.7312 0.24874 9.4524 4.975 6.9649 6.4674 12.686 6.4674 5.97-0.24874 20.397-7.4624 10.199-4.975 13.184-5.7212 3.2337-0.74624 3.98 1.4925z">
                                </path>
                            </clipPath>
                            <path class="text" d="m538.61 49.629-43.883 73.66-56.421 103.44-116.5 218.37-89.333 134.26s31.345-62.69 65.302-143.14c23.287-55.173 49.629-85.154 49.629-85.154l28.21-39.181 38.659-48.062s8.881-10.971 49.629-47.54c22.953-20.598 61.645-46.495 61.645-46.495l66.347-40.748 36.047-15.15s34.687-8.3099 36.047 7.8362c4.1793 49.629-42.838 120.16-42.838 120.16l-13.583 21.941s-29.778 40.748-43.36 55.376c-13.583 14.628-78.362 69.481-78.362 69.481s-73.138 50.674-130.6 41.271c-53.105-8.6899-74.705-42.838-60.6-77.317 14.105-34.479 28.733-38.136 52.241-50.674 21.724-11.586 53.286-22.986 82.019-29.255 28.733-6.269 146.8-21.941 146.8-21.941s69.481-5.7466 78.362-3.1345c8.881 2.6121 13.844 1.306 13.844 1.306l1.306 1.0448s-9.6647 3.1345-9.6647 10.448 4.1793 12.277 11.493 7.575c7.3138-4.7018 19.068-13.844 19.068-13.844l0.26122-1.0448s-1.6037 17.57 3.4274 22.337c9.5651 9.0638 23.216-0.63061 34.479-22.986 11.304-22.435 10.92-24.308 10.92-24.308s6.7707-20.437-11.475-25.195c-6.3031-1.6438-24.786 1.6491-18.285 11.493 5.7089 8.6435 36.047 22.986 36.047 22.986-5.9422-3.6456 9.4124 4.6014 5.7466 17.501-2.4382 8.5797-11.651 24.445-25.802 48.973 0 0 9.117 14.005 25.573 0.94433 16.456-13.06 13.289-65.851 13.289-65.851s4.8099-4.6832 7.9444 1.3246-0.82668 16.868-4.2875 24.535c-5.5039 12.193-5.9482 2.5731 12.538-9.5117 4.9045-3.2062 20.081-9.6516 25.305 2.8864 5.2242 12.538 31.102-6.6067 31.102-6.6067s19.865-12.628 22.738-11.322c2.8733 1.306-41.207 28.395-25.013 24.216 16.195-4.1793 29.975-13.767 34.677-10.894 4.7017 2.8733 10.243 11.728 18.863 11.989 8.6198 0.26121 15.617-2.847 22.669-7.5488 7.0526-4.7017 11.754-7.0526 11.754-7.0526s-156.72-205.05 5.2242-193.55 199.56 73.138 199.56 73.138 17.762 16.717-59.555 75.228c-77.317 58.51-89.855 39.704-89.855 39.704l5.7968-0.35084s48.422-48.796 54.582-57.052c5.1005-6.835 15.403-18.347 28.17-42.9 6.1871-11.899 15.372-41.595-8.0974-37.091-19.526 3.7472-56.943 15.411-90.639 62.429s-60.339 93.251-26.382 115.98c33.957 22.725 65.824 38.136 65.824 38.136s31.9 14.218 35.002 54.07c4.2093 54.077-101.63 205.23-248.45 230.68-57.904 10.035-20.216-138.26 69.263-218.66 73.331-65.891 144.14-90.704 162.99-100.3 57.838-29.452 117-42.606 117-42.606s-5.7267 1.8579-0.7637 1.0743c4.9629-0.78363 35.966-75.272 35.966-75.272l32.993-67.608s-84.892 184.93-86.46 193.03c-1.5673 8.0974-3.1345 12.538-3.1345 12.538s64.94-74.71 75.164-61.276c9.7097 12.757 9.5673 13.482 25.762 0.4219 16.195-13.06 16.068-13.997 16.068-13.997s-5.4591-1.1607-7.2876 4.847c-1.8284 6.0078-6.1323 13.717 12.016 10.844 27.367-4.3323 15.934-4.575 15.934-4.575s-24.554 22.725-10.187 21.419c14.366-1.306 45.286-16.825 45.286-16.825l5.9104-2.7651s-14.741 19.948-7.3138 17.24c8.9444-3.2613 19.997-4.1531 20.258-13.557 0.2612-9.4035-9.6719-14.457-22.87 15.385-14.728 33.3 40.487-4.9629 40.487-4.9629l31.669-19.195s-27.751-3.7914-23.572 30.427c4.1793 34.218 5.3632 35.212-4.1793 44.144-11.213 10.496-39.595-6.7914-3.2875-29.778 36.308-22.986 65.716-37.353 65.716-37.353s14.28-47.869 32.391-91.005c20.317-48.392 56.149-90.873 56.149-90.873s-74.25 72.403-94.198 220.53c-19.458 144.5 122.27-171.03 122.27-171.03s-8.1268-5.1716-56.149 123.38c-36.44 97.546-2.9553 52.455-2.9553 52.455s41.004-55.78 46.175-41.743c5.1716 14.037-2.2164 19.763 16.992 9.4198 19.209-10.343 26.412-22.718 32.323-21.979 5.9105 0.7388 5.3564-1.2929 5.3564-1.2929s-44.328 30.291-27.521 27.151c16.808-3.1399 26.183-12.802 26.183-12.802s2.8154-1.7891 20.362 6.8919c14.143 6.9969 46.175-14.407 46.175-14.407s265.16-194.52 20.671-188.25c-244.49 6.269-345.84-85.676-345.84 6.269 0 91.945 35.524 140.01 52.241 137.92 16.717-2.0897 197.47-10.448 216.28-8.3586" clip-path="url(#clipPath19408)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="80"></path>
                        </svg>
                    </div>
                </a>
            </label>

            <div class="dynamic-island">
                <img class="lens" alt="lens picture" src="./assets/svg/lens.svg" />
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="content">

                    <div class="action">
                        <section class="progress-area"></section>
                        <section class="uploaded-area"></section>
                    </div>
                </div>
            </div>
            <i class="btn btn1"></i>
            <i class="btn btn2"></i>
            <i class="btn btn3"></i>
            <i class="rightSideBtn"></i>


        </header>
        <!-- <div class="container"> -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="drop-zone">
                <input type="file" class="file-input" name="fileToUpload" id="fileToUpload" hidden />
                <i>
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="300px" height="300px" fill="none">
                        <path fill="#fff" d="M7.77 9.87l.724.2-.723-.2zm8.46 0l.723-.197-.724.198zm-7.198 4.27a.75.75 0 000-1.5v1.5zm5.982-1.5a.75.75 0 100 1.5v-1.5zm-9.363.063c0-1.085.88-1.964 1.964-1.964v-1.5a3.464 3.464 0 00-3.464 3.464h1.5zm1.964-1.964a.911.911 0 00.88-.67l-1.447-.396a.589.589 0 01.567-.434v1.5zm.88-.67A3.637 3.637 0 0112 7.398v-1.5a5.137 5.137 0 00-4.952 3.775l1.446.396zM12 7.398a3.636 3.636 0 013.506 2.671l1.447-.396A5.137 5.137 0 0012 5.898v1.5zm3.506 2.671c.11.402.475.67.879.67v-1.5c.259 0 .496.171.567.434l-1.446.396zm.879.67c1.085 0 1.964.879 1.964 1.964h1.5a3.464 3.464 0 00-3.464-3.464v1.5zM5.684 14.14h3.348v-1.5H5.684v1.5zm9.33 0h3.302v-1.5h-3.301v1.5zm3.335-1.438c0-.014.004-.034.013-.053a.083.083 0 01.018-.025c.001-.001-.004.003-.017.008a.146.146 0 01-.047.008v1.5c.692 0 1.533-.493 1.533-1.438h-1.5zm-14.198 0c0 .945.842 1.438 1.533 1.438v-1.5a.145.145 0 01-.047-.008c-.013-.005-.018-.009-.017-.008a.114.114 0 01.031.078h-1.5z" />
                        <path fill="#fff" d="M12.566 14.927a.566.566 0 11-1.132 0h1.132zm-1.132-4.53a.566.566 0 011.132 0h-1.132zm-.921 1.91a.566.566 0 11-.801-.8l.8.8zM12 10.02l-.4-.4a.566.566 0 01.8 0l-.4.4zm2.288 1.487a.566.566 0 11-.8.801l.8-.8zm-2.854 3.421v-4.53h1.132v4.53h-1.132zm-1.722-3.42l1.888-1.89.8.8-1.887 1.888-.801-.8zm2.688-1.89l1.888 1.887-.8.801L11.6 10.42l.8-.801z" style="
                animation: slide-right 0.5s cubic-bezier(1, -0.43, 0.68, 0.57)
                  infinite alternate both;
              " />
                    </svg>
                </i>
                <p>Upload your files here.</p>
            </div>
            <!-- ===== FOR MANUAL INPUT BUTTON ===== -->
            <!-- <input type="submit" value="Upload" name="submit" class="submit-button"/> -->
        </form>
        <!-- </div> -->
    </div>

    <div id="preloader">
        <div class="loader JS_on">
            <span class="binary"></span>
            <span class="binary"></span>
            <span class="binary"></span>
            <span class="getting-there">welcome...</span>
        </div>
    </div>

    <script src="./assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>