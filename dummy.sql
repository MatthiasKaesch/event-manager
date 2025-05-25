CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    tag VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    speakers VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL
);

INSERT INTO events (title, tag, description, speakers, start_date) VALUES
("AI and Business", "Panel", "Exploring AI's role in modern business strategies.", "Sophia Miller, David Casper", "2025-06-01"),
("Machine Learning 101", "Workshop", "A beginner-friendly introduction to ML concepts.", "John Romeo", "2025-06-01"),
("Cybersecurity and AI", "Talk", "How AI is used in modern cybersecurity defenses.", "Aziz Cemrek", "2025-06-02"),
("Future of AI in Transportation", "Panel", "Autonomous vehicles and AI-driven logistics.", "Jessica Shaft, Dr. Amanda Lee", "2025-06-03"),
("AI in Gaming", "Talk", "How AI is revolutionizing game development by enabling smarter NPC behavior, procedural content generation, and adaptive difficulty balancing for a more immersive player experience.", "David Casper", "2025-06-04"),
("Data Science in AI", "Workshop", "Hands-on session with real-world AI datasets.", "Roberta Rodriguez", "2025-06-05"),
("AI in Entertainment", "Panel", "The role of AI in movies, music, and content creation.", "John Romeo, Aziz Cemrek", "2025-06-06"),
("AI in Finance", "Talk", "How AI is reshaping the financial industry.", "Jessica Shaft", "2025-06-07"),
("Deep Learning Applications", "Workshop", "Explore real-world deep learning models.", "Hiroshi Tanaka", "2025-06-08"),
("AI in Smart Cities", "Panel", "The future of AI in urban development and how smart cities are leveraging machine learning to optimize traffic flow, energy consumption, and public safety.", "Emanuelle Chapon, Roberta Rodriguez", "2025-06-09");
