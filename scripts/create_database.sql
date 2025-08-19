-- Create database tables for UESC website

-- Contact inquiries table
CREATE TABLE IF NOT EXISTS contact_inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(255),
    message TEXT NOT NULL,
    status ENUM('new', 'read', 'replied') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- News table
CREATE TABLE IF NOT EXISTS news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    excerpt TEXT,
    featured_image VARCHAR(255),
    status ENUM('draft', 'published', 'archived') DEFAULT 'draft',
    author VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    published_at TIMESTAMP NULL
);

-- Events table
CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT NOT NULL,
    event_date DATE NOT NULL,
    event_time TIME,
    location VARCHAR(255),
    featured_image VARCHAR(255),
    status ENUM('draft', 'published', 'archived') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Gallery table
CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image_path VARCHAR(255) NOT NULL,
    alt_text VARCHAR(255),
    category VARCHAR(100),
    sort_order INT DEFAULT 0,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Programs table
CREATE TABLE IF NOT EXISTS programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT NOT NULL,
    duration VARCHAR(50),
    affiliation VARCHAR(100),
    program_type ENUM('undergraduate', 'graduate', 'postgraduate') NOT NULL,
    department VARCHAR(100),
    featured_image VARCHAR(255),
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Faculty table
CREATE TABLE IF NOT EXISTS faculty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    designation VARCHAR(100),
    department VARCHAR(100),
    qualification TEXT,
    experience TEXT,
    specialization TEXT,
    email VARCHAR(255),
    phone VARCHAR(20),
    profile_image VARCHAR(255),
    bio TEXT,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO news (title, slug, content, excerpt, status, author, published_at) VALUES
('UESC Receives Excellence Award in Engineering Education', 'uesc-receives-excellence-award', 'Universal Engineering & Science College has been recognized for its outstanding contribution to engineering education in Nepal, receiving the prestigious Excellence Award from the Ministry of Education.', 'UESC recognized for outstanding contribution to engineering education in Nepal.', 'published', 'Admin', NOW()),
('New Research Lab Inaugurated for Advanced Computing', 'new-research-lab-inaugurated', 'The college has inaugurated a state-of-the-art research laboratory equipped with latest computing facilities to enhance research capabilities in computer engineering and artificial intelligence.', 'State-of-the-art research laboratory inaugurated with latest computing facilities.', 'published', 'Admin', NOW()),
('Industry Partnership Program Launched', 'industry-partnership-program-launched', 'UESC announces new partnership program with leading engineering companies to provide students with real-world experience and enhanced placement opportunities in the industry.', 'New partnership program with leading engineering companies announced.', 'published', 'Admin', NOW());

INSERT INTO events (title, slug, description, event_date, status) VALUES
('Student Leadership Election 2080', 'student-leadership-election-2080', 'Annual student leadership election for academic year 2080', '2025-11-23', 'published'),
('Parents Seminar 2078', 'parents-seminar-2078', 'Interactive seminar for parents and guardians', '2024-11-23', 'published'),
('Engineering Workshop', 'engineering-workshop', 'Hands-on engineering workshop for students', '2025-12-15', 'published');

INSERT INTO gallery (title, description, image_path, alt_text, category) VALUES
('Computer Lab', 'Students working in the computer laboratory', 'assets/images/engineering-students-computer-lab.png', 'Computer Lab', 'facilities'),
('Civil Engineering Field Work', 'Students conducting field work for civil engineering projects', 'assets/images/civil-engineering-fieldwork.png', 'Civil Engineering Field Work', 'academics'),
('Graduation Ceremony', 'Annual graduation ceremony celebration', 'assets/images/graduation-ceremony.png', 'Graduation Ceremony', 'events'),
('Campus Building', 'Main campus building of UESC', 'assets/images/campus-building.png', 'Campus Building', 'campus'),
('Engineering Workshop', 'Students participating in engineering workshop', 'assets/images/engineering-workshop.png', 'Engineering Workshop', 'activities'),
('Seminar Hall', 'College seminar hall during an event', 'assets/images/college-seminar-hall.png', 'Seminar Hall', 'facilities');
