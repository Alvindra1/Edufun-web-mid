<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        Article::create([
            'category_id' => 1,
            'writer_id' => 1,
            'title' => 'Machine Learning',
            'description' => 'Machine learning is a branch of artificial intelligence that focuses on building applications that learn from data and improve their accuracy over time without being programmed to do so.',
            'content' => 'Machine learning is a method of data analysis that automates analytical model building. It is a branch of artificial intelligence based on the idea that systems can learn from data, identify patterns and make decisions with minimal human intervention. Machine learning algorithms are trained on large datasets and can recognize patterns in new data. The process involves feeding data to algorithms, allowing them to learn and make predictions or decisions without being explicitly programmed for specific tasks. Applications include recommendation systems, image recognition, natural language processing, and predictive analytics.',
            'created_at' => $faker->dateTimeBetween('-2 months', 'now')
        ]);
        Article::create([
            'category_id' => 1,
            'writer_id' => 3,
            'title' => 'Deep Learning',
            'description' => 'Deep learning is part of a broader family of machine learning methods based on artificial neural networks with representation learning.',
            'content' => 'Deep learning is a subset of machine learning that uses multi-layered neural networks to analyze various factors of data. These neural networks attempt to simulate the behavior of the human brain, allowing it to learn from large amounts of data. While a neural network with a single layer can make approximate predictions, additional hidden layers help optimize and refine for accuracy. Deep learning drives many artificial intelligence applications and services that improve automation, performing analytical tasks without human intervention. It powers technologies like voice-activated TV remotes, credit card fraud detection, digital assistants, and self-driving cars.',
            'created_at' => $faker->dateTimeBetween('-2 months', 'now')
        ]);
        Article::create([
            'category_id' => 1,
            'writer_id' => 1,
            'title' => 'Natural Language Processing',
            'description' => 'Natural Language Processing (NLP) is a branch of AI that helps computers understand, interpret and manipulate human language.',
            'content' => 'Natural Language Processing combines computational linguistics with statistical, machine learning, and deep learning models. These technologies enable computers to process human language in the form of text or voice data and understand its full meaning, complete with the speaker or writer\'s intent and sentiment. NLP drives computer programs that translate text from one language to another, respond to spoken commands, and summarize large volumes of text rapidly. You probably interact with NLP every day through voice-operated GPS systems, digital assistants, speech-to-text dictation software, and customer service chatbots.',
            'created_at' => $faker->dateTimeBetween('-2 months', 'now')
        ]);
        Article::create([
            'category_id' => 2,
            'writer_id' => 2,
            'title' => 'Software Security',
            'description' => 'Software security involves the development and implementation of security measures to protect software from malicious attacks and other security risks.',
            'content' => 'Software security is the practice of building software to be secure and function properly under malicious attack. It involves designing, implementing, and testing security features to protect software applications. This includes secure coding practices, vulnerability assessment, penetration testing, and security audits. Software security encompasses authentication, authorization, encryption, input validation, and secure session management. It is crucial to implement security measures throughout the software development lifecycle, from design to deployment and maintenance. Common threats include SQL injection, cross-site scripting, buffer overflows, and authentication vulnerabilities.',
            'created_at' => $faker->dateTimeBetween('-2 months', 'now')
        ]);
        Article::create([
            'category_id' => 2,
            'writer_id' => 2,
            'title' => 'Network Administration',
            'description' => 'Network administration refers to the activities, methods, procedures, and tools that relate to the operation, management, and maintenance of a computer network.',
            'content' => 'Network administration involves managing and maintaining computer networks. This includes installing, configuring, and supporting network equipment such as routers, switches, firewalls, and access points. Network administrators monitor network performance, troubleshoot issues, implement security measures, and ensure data backup and recovery procedures are in place. They manage user accounts, assign permissions, and maintain network documentation. Key responsibilities include network planning, capacity management, disaster recovery planning, and ensuring compliance with security policies. Network administrators must stay updated with the latest networking technologies and security threats to protect organizational data and maintain optimal network performance.',
            'created_at' => $faker->dateTimeBetween('-2 months', 'now')
        ]);

        Article::create([
            'category_id' => 2,
            'writer_id' => 2,
            'title' => 'Popular Network Technology',
            'description' => 'Exploring the latest and most popular network technologies that are shaping the future of connectivity and communication.',
            'content' => 'Popular network technologies include 5G networks, Software-Defined Networking (SDN), Network Function Virtualization (NFV), and Internet of Things (IoT) connectivity. 5G technology offers unprecedented speed and low latency for mobile networks. SDN separates the network control plane from the data plane, enabling more flexible and programmable network management. NFV replaces dedicated hardware appliances with software running on standard servers. Cloud networking allows organizations to connect their infrastructure across multiple cloud providers. Wi-Fi 6 and Wi-Fi 6E provide faster speeds and better performance in crowded environments. These technologies are transforming how networks are designed, deployed, and managed in modern enterprises.',
            'created_at' => $faker->dateTimeBetween('-2 months', 'now')
        ]);
    }
    
}
