

const BASE_URL = "";

function goToDoctorsPage() {
  const homeSearchInput = document.getElementById("homeSearch");

  if (!homeSearchInput) {
    window.location.href = "doctors.php";
    return;
  }

  const searchValue = homeSearchInput.value.trim();
  window.location.href = `doctors.php?search=${encodeURIComponent(searchValue)}`;
}

async function loadDoctors() {
  const doctorList = document.getElementById("doctorList");
  if (!doctorList) return;

  try {
    const params = new URLSearchParams(window.location.search);
    const searchValue = params.get("search");

    let response;
    if (searchValue) {
      const searchInput = document.getElementById("searchInput");
      if (searchInput) {
        searchInput.value = searchValue;
      }
      response = await fetch(`${BASE_URL}search_doctor.php?search=${encodeURIComponent(searchValue)}`);
    } else {
      response = await fetch(`${BASE_URL}search_doctor.php?search=`);
    }

    const doctors = await response.json();
    displayDoctors(doctors);
  } catch (error) {
    console.error("Error loading doctors:", error);
    doctorList.innerHTML = `<p class="message-text">Unable to load doctors right now.</p>`;
  }
}

function displayDoctors(doctors) {
  const doctorList = document.getElementById("doctorList");
  if (!doctorList) return;

  doctorList.innerHTML = "";

  if (!doctors || doctors.length === 0) {
    doctorList.innerHTML = `<p class="message-text">No doctors found matching your search.</p>`;
    return;
  }

  doctors.forEach((doctor) => {

    doctorList.innerHTML += `
      <div class="doctor-card">
        <img src="${doctor.image}" alt="${doctor.name}" onerror="this.src='https://via.placeholder.com/150'">
        <h3>${doctor.name}</h3>
        <p><strong>Specialization:</strong> ${doctor.specialization}</p>
        <p><strong>Hospital:</strong> ${doctor.hospital}</p>
        <p><strong>City:</strong> ${doctor.city}</p>
        <a href="doctor-details.php?id=${doctor.id}" class="view-btn">View Details</a>
      </div>
    `;
  });
}


async function searchDoctors() {
  const searchInput = document.getElementById("searchInput");
  const doctorList = document.getElementById("doctorList");

  if (!searchInput || !doctorList) return;

  const searchValue = searchInput.value.trim();

  try {
    const response = await fetch(`${BASE_URL}search_doctor.php?search=${encodeURIComponent(searchValue)}`);
    const doctors = await response.json();
    displayDoctors(doctors);
  } catch (error) {
    console.error("Error searching doctors:", error);
    doctorList.innerHTML = `<p class="message-text">Unable to search doctors right now.</p>`;
  }
}


async function loadDoctorDetails() {
  const detailsDiv = document.getElementById("doctorDetails");
  if (!detailsDiv) return;

  const params = new URLSearchParams(window.location.search);
  const id = params.get("id");

  if (!id) {
    detailsDiv.innerHTML = `<p class="message-text">Doctor ID missing.</p>`;
    return;
  }

  try {

    const response = await fetch(`${BASE_URL}get_doctor_by_id.php?id=${encodeURIComponent(id)}`);
    const doctor = await response.json();

    if (!doctor || doctor.error) {
      detailsDiv.innerHTML = `<p class="message-text">Doctor details not found.</p>`;
      return;
    }

    detailsDiv.innerHTML = `
      <div class="details-container">
        <img src="${doctor.image}" alt="${doctor.name}">
        <h2>${doctor.name}</h2>
        <p><strong>Specialization:</strong> ${doctor.specialization}</p>
        <p><strong>Hospital:</strong> ${doctor.hospital}</p>
        <p><strong>City:</strong> ${doctor.city}</p>
        <p><strong>Experience:</strong> ${doctor.experience} years</p>
        <p><strong>Consultation Fees:</strong> ₹${doctor.fees}</p>
        <p><strong>Contact:</strong> ${doctor.contact}</p>
        <a href="doctors.php" class="back-btn">Back to Search</a>
      </div>
    `;
  } catch (error) {
    console.error("Error loading doctor details:", error);
    detailsDiv.innerHTML = `<p class="message-text">Unable to load details.</p>`;
  }
}

window.onload = () => {
  loadDoctors();
  loadDoctorDetails();
};