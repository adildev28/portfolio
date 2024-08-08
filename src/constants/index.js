import {
  mobile,
  backend,
  creator,
  web,
  javascript,
  typescript,
  html,
  css,
  reactjs,
  redux,
  tailwind,
  nodejs,
  mongodb,
  git,
  figma,
  docker,
  meta,
  oracea,
  starbucks,
  tesla,
  shopify,
  carrent,
  jobit,
  tripguide,
  threejs,
  animlcare,
  store,
  inventory,
  php,
  mysql,
  bootstrap,
  laravel,
  upwork

} from "../assets";

export const navLinks = [
  {
    id: "about",
    title: "About",
  },
  {
    id: "work",
    title: "Work",
  },
  {
    id: "contact",
    title: "Contact",
  },
];

const services = [
  {
    title: "Developpeur Web",
    icon: web,
  },
  {
    title: "Developpeur React js",
    icon: mobile,
  },
  {
    title: "Developpeur Laravel ",
    icon: backend,
  },
  {
    title: "Concepteur Photoshop",
    icon: creator,
  },
];

const technologies = [
  {
    name: "HTML 5",
    icon: html,
  },
  {
    name: "CSS 3",
    icon: css,
  },
  {
    name: "Bootstrap",
    icon: bootstrap,
  },
  {
    name: "JavaScript",
    icon: javascript,
  },
  {
    name: "PHP",
    icon: php,
  },
  {
    name: "React JS",
    icon: reactjs,
  },
  {
    name: "Redux ",
    icon: redux,
  },
  {
    name: "Tailwind CSS",
    icon: tailwind,
  },
  {
    name:"laravel",
    icon:laravel
  },
  {
    name: "Node JS",
    icon: nodejs,
  },
  {
    name: "MongoDB",
    icon: mongodb,
  },
  {
    name: "MySQL",
    icon: mysql,
  },
  {
    name: "git",
    icon: git,
  },
  {
    name: "docker",
    icon: docker,
  },
];

const experiences = [
  {
    title: "stagiaire Developpeur Laravel 11",
    company_name: "Oracea Services",
    icon: oracea,
    iconBg: "#383E56",
    date: "Avril 2024 - Juin 2024",
    points: [
      "Développer et maintenir des applications Web (gestion du système d'inventaire) à l'aide de Laravel 11 et d'autres technologies connexes.",      "Collaborating with cross-functional teams including product managers, and other developers to create high-quality products.",
      "Mise en œuvre d'un design réactif et garantie d'une compatibilité entre navigateurs.", 
      "Participer aux révisions de code et fournir des commentaires constructifs aux autres développeurs.",    ],
   },
  {
    title: "Full stack Developer",
    company_name: "Freelance Upwork",
    icon: upwork,
    iconBg: "#E6DEDD",
    date: "2/07/2024 - Present",
    points: [
"Développement et maintenance d'applications web en utilisant React.js et Laravel.",
"Collaboration avec d'autres développeurs pour créer des produits de haute qualité.",
"Mise en œuvre de designs responsives et garantie de la compatibilité entre navigateurs.",
"Participation aux revues de code et fourniture de feedback constructif aux autres développeurs."
    ],
  },
];

const testimonials = [
  // {
  //   testimonial:
  //     "Adil a rapidement démontré de solides compétences techniques et une grande capacité d'apprentissage, apportant des contributions significatives aux tâches de développement front-end et back-end en tant que développeur Full Stack.",
  //   name: "Mr Aouness Amzile",
  //   designation: "COO",
  //   company: "oracea services",
  //   image: "https://randomuser.me/api/portraits/men/5.jpg",

  // },
  // {
  //   testimonial:
  //   "Adil est un étudiant exceptionnellement intelligent et remarquablement intelligent, démontrant constamment une compréhension approfondie et une aptitude pour les concepts de développement logiciel.",    name: "Chris Brown",
  //   name: "Mr Yassine Dabachine",
  //   designation: "Prof",
  //   company: "OFPPT",
  //   image: "https://randomuser.me/api/portraits/men/4.jpg",

  // },
  // {
  //   testimonial:
  //     "After Rick optimized our website, our traffic increased by 50%. We can't thank them enough!",
  //   name: "Lisa Wang",
  //   designation: "CTO",
  //   company: "456 Enterprises",
  //   image: "https://randomuser.me/api/portraits/women/6.jpg",
  // },
];

const projects = [
  {
    name: "Magasin E-commerce",
    description:
"Front-end moderne d'une plateforme e-commerce construit avec React.js, permettant aux utilisateurs de naviguer, d'acheter des produits en toute fluidité, de s'inscrire et d'ajouter des articles au panier, offrant ainsi une expérience de shopping attrayante.",
    tags: [
      {
        name: "react",
        color: "blue-text-gradient",
      },
      {
        name: "css",
        color: "pink-text-gradient",
      },
    ],
    image: store,
    source_code_link: "https://github.com/adildev28/E-commerce-Project-",
  },
  {
    name: "systéme de gestion de stock",
    description:
"Système de gestion d'inventaire complet développé avec Laravel, conçu pour rationaliser le suivi, la gestion et le reporting des niveaux de stock, assurant un contrôle efficace et précis de l'inventaire à travers différents sites. Ce système a été créé dans le cadre d'un stage de projet de fin d'études (PFE).",
    tags: [
      {
        name: "Laravel_11",
        color: "pink-text-gradient",
      },
      {
        name: "blade",
        color: "green-text-gradient",
      },
      {
        name: "bootstrap",
        color: "blue-text-gradient",
      },
    ],
    image: inventory,
    source_code_link: "",
  },
  {
    name: "Animal care",
    description:
"Une application web SaaS conçue pour guider les propriétaires d'animaux dans la prise en charge de leurs animaux, signaler les animaux disparus, acheter des produits essentiels pour animaux et se connecter avec des vétérinaires et des dresseurs, offrant une plateforme complète et conviviale pour tous les besoins liés aux animaux.",
    tags: [
      {
        name: "react",
        color: "blue-text-gradient",
      },
      {
        name: "RestAPI",
        color: "green-text-gradient",
      },
      {
        name: "Laravel",
        color: "pink-text-gradient",
      },
    ],
    image: animlcare,
    source_code_link: "https://github.com/adildev28/AnimalCare-Adil_boulbarod-Mahdi_gazour",
  },
];

export { services, technologies, experiences, testimonials, projects };