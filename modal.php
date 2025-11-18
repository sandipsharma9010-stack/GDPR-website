<?php include_once('header.php'); ?>



<div id="modal-overlay" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden">
  <div id="modal-panel" class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
    <!-- Modal header -->
    <div class="flex justify-between items-center pb-3">
      <h3 class="text-lg font-bold">Modal Title</h3>
      <button id="close-btn" class="text-gray-500 hover:text-gray-800">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="mt-2">
      <p>This is the content of the modal.</p>
    </div>
    <!-- Modal footer -->
    <div class="mt-4 flex justify-end">
      <button id="confirm-btn" class="bg-blue-500 text-white px-4 py-2 rounded">
        OK
      </button>
    </div>
  </div>
</div>

<button id="open-btn" class="bg-purple-500 text-white rounded-md px-8 py-2">
  Open Modal
</button>


<script>

const openButton = document.getElementById('open-btn');
const closeButton = document.getElementById('close-btn');
const modalOverlay = document.getElementById('modal-overlay');

// Function to open the modal
const openModal = () => {
  modalOverlay.classList.remove('hidden');
};

// Function to close the modal
const closeModal = () => {
  modalOverlay.classList.add('hidden');
};

// Add event listeners to the buttons
openButton.addEventListener('click', openModal);
closeButton.addEventListener('click', closeModal);

// Add event listener to close when clicking the overlay
modalOverlay.addEventListener('click', (event) => {
  if (event.target === modalOverlay) {
    closeModal();
  }
});



</script>




<?php include_once('footer.php'); ?>