<!-- <div class='hidden'> -->
    <!-- <div id='modalCreate' class='h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50' tabindex='-1'>
        <div class="bg-white rounded shadow-lg w-1/3">
            <div class='border-b px-4 py-2'>
                <h3>Modal Title</h3>
            </div>

            <div class='p-3'>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptatem minus consequuntur modi, quasi aliquam 
                blanditiis veniam consequatur porro voluptatum voluptates sint fugit officia perspiciatis? Animi saepe quasi 
                praesentium sint.
            </div>

            <div class='flex justify-end items-center w-100 border-t p-3'>
                <button class='bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1'>Cancel</button>
                <button class='bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1'>Oke</button>
            </div>
        </div>
    </div> -->
<!-- </div> -->


<div class="fixed z-10 inset-0 overflow-y-auto" id="myModal">
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg overflow-hidden shadow-xl">
      
      <div class="p-4">
        
        <div class="flex justify-between items-center pb-3  ">
          <div class='font-bold'>
            Modal title
          </div>
            
          <button class="text-gray-500 hover:text-gray-700 focus:outline-none" onclick="closeModal()">
            <svg class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        
        <div class='p-3 border-t'>
            <p>Lorem ipsum dolor sit amet, consectetur adipi</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipi</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipi</p>
                    
         </div>

            <div class='flex justify-end items-center w-100 border-t p-3'>
                <button class='bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1' onclick="closeModal()">Cancel</button>
                <button class='bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1'>Oke</button>
            </div>
      </div>
    </div>
  </div>
</div>








<script type="text/javascript">
  window.onload = closeModal();

  function openModal() {
    document.getElementById('myModal').classList.add('block');
    document.getElementById('myModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('myModal').classList.add('hidden');
    document.getElementById('myModal').classList.remove('block');
  }
  
</script>

