

<div class="skills-container">
        <!-- C# Loading Ring -->
        <div class="skill">
            <svg class="progress-ring" width="120" height="120">
                <circle class="progress-ring__circle" cx="60" cy="60" r="50" stroke="blue" />
            </svg>
            <div class="percentage">Order<div class="percentage-name">70%</div></div>
            <div class="skill-name">Kaldereta</div>
        </div>

        <!-- C++ Loading Ring -->
        <div class="skill">
            <svg class="progress-ring" width="120" height="120">
                <circle class="progress-ring__circle" cx="60" cy="60" r="50" stroke="red" />
            </svg>
            <div class="percentage">Order<div class="percentage-name">60%</div></div>
            <div class="skill-name">Karekare</div>
        </div>

        <!-- JavaScript Loading Ring -->
        <div class="skill">
            <svg class="progress-ring" width="120" height="120">
                <circle class="progress-ring__circle" cx="60" cy="60" r="50" stroke="yellow" />
            </svg>
            <div class="percentage">Order<div class="percentage-name">75%</div></div>
            <div class="skill-name">Lechon</div>
        </div>

        <!-- HTML Loading Ring -->
        <div class="skill">
            <svg class="progress-ring" width="120" height="120">
                <circle class="progress-ring__circle" cx="60" cy="60" r="50" stroke="orange" />
            </svg>
            <div class="percentage">Order<div class="percentage-name">65%</div></div>
            <div class="skill-name">Menudo</div>
        </div>

        <!-- CSS Loading Ring -->
        <div class="skill">
            <svg class="progress-ring" width="120" height="120">
                <circle class="progress-ring__circle" cx="60" cy="60" r="50" stroke="green" />
            </svg>
            <div class="percentage">Order<div class="percentage-name">85%</div></div>
            <div class="skill-name">Sinigang</div>
        </div>

        <!-- PHP Loading Ring -->
        <div class="skill">
            <svg class="progress-ring" width="120" height="120">
                <circle class="progress-ring__circle" cx="60" cy="60" r="50" stroke="purple" />
            </svg>
            <div class="percentage">Order<div class="percentage-name">60%</div></div>
            <div class="skill-name">Bulalo</div>
        </div>
    </div>

    

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #1e1c2a;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.skills-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: 39px;
}

.skill {
    text-align: center;
    margin: 10px;
    position: relative;
}

/* Circular Progress Ring */
.progress-ring__circle {
    fill: transparent;
    stroke-width: 10;
    stroke-dasharray: 314; /* Circumference of the circle (2 * PI * r) */
    stroke-dashoffset: 314;
    transition: stroke-dashoffset 1s ease-out, stroke 0.3s ease, transform 0.3s ease;
}

/* Animation for different percentages */
.skill:nth-child(1) .progress-ring__circle {
    stroke-dashoffset: calc(314 - (314 * 80) / 100); /* C# - 80% */
    stroke: blue;
}

.skill:nth-child(2) .progress-ring__circle {
    stroke-dashoffset: calc(314 - (314 * 70) / 100); /* C++ - 70% */
    stroke: red;
}

.skill:nth-child(3) .progress-ring__circle {
    stroke-dashoffset: calc(314 - (314 * 90) / 100); /* JavaScript - 90% */
    stroke: yellow;
}

.skill:nth-child(4) .progress-ring__circle {
    stroke-dashoffset: calc(314 - (314 * 95) / 100); /* HTML - 95% */
    stroke: orange;
}

.skill:nth-child(5) .progress-ring__circle {
    stroke-dashoffset: calc(314 - (314 * 85) / 100); /* CSS - 85% */
    stroke: green;
}

.skill:nth-child(6) .progress-ring__circle {
    stroke-dashoffset: calc(314 - (314 * 75) / 100); /* PHP - 75% */
    stroke: purple;
}

/* Hover effect */
.skill:hover .progress-ring__circle {
    stroke-width: 15;
    transform: scale(1.05);
}

/* Percentage and skill name styles */
.percentage {
    position: absolute;
    top: 39%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px;
    font-weight: bold;
}

.skill-name {
    margin-top: 20px;
    font-size: 20px;
}
</style>

<script>
async function fetchSkills() {
    const apiUrl = 'http://localhost/finals/Myweb/foods.php'; // Replace with your actual API URL
    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const skills = await response.json();
        displaySkills(skills);
    } catch (error) {
        console.error('Error fetching skills:', error);
    }
}

function displaySkills(skills) {
    const skillsContainer = document.getElementById('skills-container');
    skills.forEach(skill => {
        const skillCircle = document.createElement('div');
        skillCircle.className = 'skill-circle';
        skillCircle.setAttribute('data-percent', skill.percent);
        skillCircle.style.setProperty('--clr', skill.color);
        
        const skillName = document.createElement('div');
        skillName.className = 'skill-name';
        skillName.textContent = skill.name;

        skillCircle.appendChild(skillName);
        skillsContainer.appendChild(skillCircle);
    });
}

document.addEventListener('DOMContentLoaded', fetchSkills);

</script>