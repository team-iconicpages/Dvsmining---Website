<?php 
// database connection
include '../config/db_config.php';

// form logic
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Form submitted successfully!')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<section class="text-gray-600 body-font relative mr-5 md:mr-36 ml-5 md:ml-36">
    <div class="container px-5 py-0 mx-auto flex sm:flex-nowrap flex-wrap rounded-2xl">
        <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=Mining%20Company%20Location&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">OUR LOCATION</h2>
                    <p class="mt-1">123 Mining Ave, Industrial Park, City, State, ZIP</p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">CONTACT EMAIL</h2>
                    <a class="text-orange-500 leading-relaxed">info@dvsmining.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">CONTACT PHONE</h2>
                    <p class="leading-relaxed">+1 (800) 123-4567</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 p-5 rounded-2xl">
            <h2 class="text-orange-600 text-3xl mb-1 font-bold title-font mb-5">Request for Callback</h2>
            <form method="post" action="">
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Full Name</label>
                    <input type="text" id="name" name="name" required class="w-full bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email Address</label>
                    <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="w-full bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
                    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" class="w-full bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Your Message</label>
                    <textarea id="message" name="message" required minlength="10" class="w-full bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button type="submit" name="submit" class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Submit</button>
            </form>
            <p class="text-xs text-gray-500 mt-3">Your information will be kept confidential and used solely for responding to your request.</p>
        </div>
    </div>
</section>
