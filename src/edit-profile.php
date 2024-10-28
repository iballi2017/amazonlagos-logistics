<h2 class="p-4 text-lg font-bold bg-theme-clr-light-100 text-theme-clr-secondary">Edit Profile</h2>
<div class="p-4">
    <div class="relative overflow-x-auto">

        <form action="">
            <div class="grid grid-cols-12 gap-2 lg:gap-4">
                <div class="col-span-12">
                    <label for="up_username-error" class="block mb-2 font-medium text-red-700 dark:text-red-500 cursor-pointer">Your name (error sample field!)</label>
                    <input type="text" id="up_username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Bonnie Green">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>

                </div>
                <div class="col-span-12 lg:col-span-6">
                    <label for="up_first_name" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">First name</label>
                    <input type="text" id="up_first_name" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <label for="up_last_name" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Last name</label>
                    <input type="text" id="up_last_name" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <label for="up_email" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Email address</label>
                    <input type="email" id="up_email" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <label for="up_phone" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Phone</label>
                    <input type="tel" id="up_phone" class="phone | border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <label for="up_country" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Country</label>
                    <select id="up_country" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>France</option>
                        <option>Germany</option>
                    </select>
                </div>

                <div class="col-span-12 lg:col-span-6">
                    <label for="up_state" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">State</label>
                    <select id="up_state" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3">
                        <option value="abj">Abuja</option>
                        <option value="ada">Adamawa</option>
                    </select>
                </div>

                <div class="col-span-12 lg:col-span-6">
                    <label for="up_lga" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">L.G.A</label>
                    <input type="text" id="up_lga" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <label for="up_street" class="block mb-2 font-medium text-theme-clr-secondary cursor-pointer">Street</label>
                    <input type="text" id="up_street" class="border border-theme-clr-light-800 text-theme-clr-secondary text-sm rounded-lg focus:ring-theme-clr-primary focus:border-theme-clr-primary block w-full p-2.5 py-3" required />
                </div>

                <div class="col-span-6">
                    <button type="submit" class="bg-theme-clr-primary text-theme-clr-secondary focus:ring-4 focus:outline-none focus:ring-theme-clr-primary rounded-lg px-8 py-2.5 text-sm text-center font-semibold">
                        Save
                    </button>
                </div>
                <div class="col-span-6 text-right">
                    <button id="delete-account" type="button" class="text-red-500 hover:text-red-600 py-2.5 text-sm text-center font-semibold">
                        Delete Account
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- pop-up dialog box, containing a form -->
<dialog id="favDialog" class="w-full max-w-sm bg-transparent">
    <div class="bg-white border border-gray-200 rounded-lg shadow">
        <h5 class="p-4 text-center bg-theme-clr-secondary rounded-t-lg text-white">Alert</h5>
        <form method="dialog" class="p-4 text-center">
            <p class="font-bold">
                Are you sure you want to delete this account
            </p>
            <p class="text-sm mb-4">
                You won't be able to use the information's<br /> given again
            </p>
            <!-- <input type="number" value="1" id="favAnimal" name="delete" hidden /> -->
            <input type="number" value="1" id="delete-account-control" name="delete" hidden />
            <div class="flex items-center justify-center gap-x-4 py-3">
                <button id="cancel" type="reset" formmethod="dialog" class="border border-theme-clr-primary p-2 w-[100px] rounded-lg">No</button>
              
                <button type="submit" id="confirmBtn" class="bg-theme-clr-primary p-2 w-[100px] rounded-lg">Yes</button>
            </div>
        </form>
    </div>
</dialog>
<output></output>


<script>
    const deleteAccountBtn = document.getElementById("delete-account");
    const cancelButton = document.getElementById("cancel");
    const favDialog = document.getElementById("favDialog");
    favDialog.returnValue = "favAnimal";
    // 

    const outputBox = document.querySelector("output");
    const inputEl = favDialog.querySelector("#delete-account-control");
    const confirmBtn = favDialog.querySelector("#confirmBtn");
    // 
    function openCheck(dialog) {
        if (dialog.showModal) {
            console.log("Dialog open");
        } else {
            console.log("Dialog closed");
        }
    }

    // Update button opens a modal dialog
    deleteAccountBtn.addEventListener("click", () => {
        favDialog.showModal();
        openCheck(favDialog);
    });

    // Form cancel button closes the dialog box
    cancelButton.addEventListener("click", () => {
        favDialog.close("0");
        openCheck(favDialog);
    });

    /** */
    // "Cancel" button closes the dialog without submitting because of [formmethod="dialog"], triggering a close event.
    favDialog.addEventListener("close", (e) => {
        console.log("outputBox: ", outputBox.value)
        outputBox.value =
            favDialog.returnValue === "default" ?
            "No return value." :
            `ReturnValue: ${favDialog.returnValue}.`; // Have to check for "default" rather than empty string
    });

    // Prevent the "confirm" button from the default behavior of submitting the form, and close the dialog with the `close()` method, which triggers the "close" event.
    confirmBtn.addEventListener("click", (event) => {
        event.preventDefault(); // We don't want to submit this fake form
        console.log("inputEl: ", inputEl.value)
        favDialog.close(inputEl.value); // Have to send the select box value here.
    });
</script>