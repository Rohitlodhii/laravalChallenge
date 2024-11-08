<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rohit's Portfolio</title>
    <script src="https://kit.fontawesome.com/0730c4a9bc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
    <div class="max-w-screen-md  h-screen mx-auto pt-8">

        {{-- Navbar --}}

        <div class="flex items-center justify-evenly">
            <div class="flex gap-4">
                <a class="transition ease-in hover:underline font-medium" href="/projects">Projects</a>
               
            </div>
            <div class="flex gap-2">
                <a href="https://github.com/rohitlodhii" target="_blank">
                    <img class="cursor-pointer" width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/github.png" alt="github"/>
                  </a>
                  <a href="https://linkedin.com/in/rohitlodhiii" target="_blank">
                    <img class="cursor-pointer" width="20" height="20" src="https://img.icons8.com/ios-filled/50/linkedin.png" alt="linkedin"/>
                  </a>
                  <a href="https://instagram.com/rohitlodhiii" target="_blank">
                    <img class="cursor-pointer" width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/instagram-new.png" alt="instagram-new"/>
                  </a>
                  
            </div>
        </div>

        <div class="h-[1px] bg-neutral-500/30 max-w-xl mx-auto my-4"></div>


        {{-- Header --}}

        <div class="flex items-center justify-center my-10 gap-5 max-w-xl mx-auto">
            <div class="flex flex-col gap-3  max-w-[460px] px-4 md:px-0 ">
                <div class="md:text-6xl text-3xl font-bold tracking-tighter ">Hi, I'm Rohit 👋</div>
                <div class="md:text-md text-xs font-medium flex-1 text-zinc-500 leading-[22px] tracking-normal ">Full Stack Web developer , i love building things and learning new stuff, also a part time video editor, gamer and full time engineering student</div>
            </div>
            <div 
    class="h-24 w-24 hidden md:block rounded-full bg-zinc-400"
    style="background-image: url('https://media.licdn.com/dms/image/v2/D4D03AQHheaGh0DrKDw/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1728622140196?e=2147483647&v=beta&t=eMpQzpz5NRclPUpukxfzzZE5TSmw0hhK8tjukRdtadE'); background-size: cover; background-position: center;">
</div>

        </div>


        {{-- About Section --}}

        <div class="flex flex-col gap-2 max-w-xl mx-auto px-4 md:px-0">
            <h3 class="font-medium text-xl">About</h3>
            <p class="text-[12px] font-medium text-zinc-500 leading-[20px] tracking-tight">I'm currently pursuing a Bachelor of Technology at the University Institute of Technology, RGPV in Bhopal. I began my coding journey in 2020 and have since developed strong skills in the MERN stack, which includes MongoDB, Express, React, and Node.js. My expertise lies in building scalable and efficient applications, and I'm dedicated to continuous learning and improving my development abilities to create impactful software solutions.</p>

        </div>

        {{-- skills section --}}


        <div class="flex flex-col gap-2 max-w-xl mx-auto px-4 md:px-0 my-6">
            <h3 class="font-medium text-xl">Skills</h3>
            
            <div class="flex flex-row gap-1 flex-wrap">
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Javascript</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">ReactJS</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">NextJs</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Nodejs</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">MongoDB</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Postgres</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Prisma</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Express</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Aws</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Redis</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Docker</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Nginx</span>
                <span class="bg-zinc-700 px-2 py-1 text-zinc-100 font-semibold hover:bg-zinc-600 rounded-md text-[10px] ">Kafka</span>
            </div>
        </div>

        {{-- Projects Section --}}

        <div class="mt-10 max-w-xl mx-auto flex flex-col gap-6 px-4 md:px-0 "> 

            <div class="max-w-lg mx-auto md:text-center flex flex-col md:items-center md:justify-center gap-2">
            <h2 class="text-sm font-medium bg-zinc-800 px-4 py-1 rounded-md max-w-fit md:mx-auto text-white">Projects</h2>
            <p class="md:text-4xl text-2xl font-bold tracking-tighter">Explore my recent projects</p>
            <p class="font-medium md:text-sm text-[10px] text-zinc-500">  I've developed a range of projects, from straightforward sites to advanced web applications. Here are some of my top picks.</p>

            </div>


           <div class="grid grid-cols-1 gap-3 md:grid-cols-2  ">

            <div clas s=" border border-zinc-400/30 flex flex-col  rounded-lg overflow-hidden  cursor-pointer hover:shadow-lg transition ease-in">
                <div 
                class="h-44 bg-zinc-400 w-full"
                style="background-image: url('https://media.licdn.com/dms/image/v2/D4D05AQGKT-lEarb_eg/feedshare-thumbnail_720_1280/feedshare-thumbnail_720_1280/0/1728394143839?e=2147483647&v=beta&t=cbMup1m_eDw7moJLzAewwOMfRXeaBRgUjAYh_U0gcSE'); background-size: cover; background-position: center;">
                 </div>
            
                <div class="p-4 flex flex-col gap-3">
                <div class="font-semibold text-xl">Notion Clone</div>
                <div class="text-zinc-500 text-xs">September 2024</div>
              
                <div class="text-[12px] font-medium text-zinc-500 leading-[20px] tracking-tight">Built an notion clone with ai integrations , it have the most of the feature like the notion have , everything saves on the database
                </div>
                    <div class="grid grid-cols-4 gap-1.5 text-center">
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Nextjs</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Postgres</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Prisma</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Tailwind</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Clerk</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">ShadCn</span>
                        
                        
                        
                    </div>
                        <div class="flex gap-1">
                           <a class="bg-zinc-700 cursor-pointer text-white px-1 py-1.5 text-[12px] align-middle text-center rounded-lg w-1/3 " href="https://smaran.vercel.app/">
                        Live Link
                    </a>
                        <a class="bg-zinc-700 cursor-pointer text-white px-1 py-1.5 text-[12px] align-middle  text-center rounded-lg w-1/3 " href="https://github.com/Rohitlodhii/notionclone">
                        <div >Github</div></a>
                        </div>
                </div>
            </div>

            
            <div clas s=" border border-zinc-400/30 flex flex-col  rounded-lg overflow-hidden  cursor-pointer hover:shadow-lg transition ease-in">
                <div 
                class="h-44 bg-zinc-400 w-full"
                style="background-image: url('https://media.licdn.com/dms/image/v2/D4D2DAQEzJHenkZAvdA/profile-treasury-image-shrink_800_800/profile-treasury-image-shrink_800_800/0/1728731112952?e=1731668400&v=beta&t=zj1FVvvNIHKQyavHhEV4AYcSNzzoaqybvGRaXRgFtv4'); background-size: cover; background-position: center;">
                 </div>
            
                <div class="p-4 flex flex-col gap-3">
                <div class="font-semibold text-xl">Autocal Ai calculator</div>
                <div class="text-zinc-500 text-xs">October 2024</div>
              
                <div class="text-[12px] font-medium text-zinc-500 leading-[20px] tracking-tight">developed an AI-powered calculator that allows users to draw mathematical expressions or regular text, using the Gemini API
                </div>
                    <div class="grid grid-cols-4 gap-1.5 text-center">
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Nextjs</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Firebase</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Gemini</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Tailwind</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Canvas</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">ShadCn</span>
                        
                        
                        
                    </div>
                        <div class="flex gap-1">
                           <a class="bg-zinc-700 cursor-pointer text-white px-1 py-1.5 text-[12px] align-middle text-center rounded-lg w-1/3 " href="https://autocalai.vercel.app/">
                        Live Link
                    </a>
                        <a class="bg-zinc-700 cursor-pointer text-white px-1 py-1.5 text-[12px] align-middle  text-center rounded-lg w-1/3 " href="https://github.com/Rohitlodhii/autocal-frontend">
                        <div >Github</div></a>
                        </div>
                </div>
            </div>

            
            <div clas s=" border border-zinc-400/30 flex flex-col  rounded-lg overflow-hidden  cursor-pointer hover:shadow-lg transition ease-in">
                <div 
                class="h-44 bg-zinc-400 w-full"
                style="background-image: url('https://media.licdn.com/dms/image/v2/D4D05AQEvnsXO_ceWwA/videocover-low/videocover-low/0/1730711206480?e=1731668400&v=beta&t=NG8pnqSslRTxBo3-_9XRP5ihz7EmfuZOqQ7US09X1Tg'); background-size: cover; background-position: center;">
                 </div>
            
                <div class="p-4 flex flex-col gap-3">
                <div class="font-semibold text-xl">Landing Page</div>
                <div class="text-zinc-500 text-xs">November 2024</div>
              
                <div class="text-[12px] font-medium text-zinc-500 leading-[20px] tracking-tight">Built a animated landing page with the morden themes , used framer motion for the animations and tailwindcss
                </div>
                    <div class="grid grid-cols-4 gap-1.5 text-center">
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Nextjs</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Framer Motion</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Shadcn</span>
                        <span class="bg-zinc-100 px-2 py-1 text-zinc-800 font-medium rounded-md text-[10px] ">Tailwind</span>
                        
                        
                        
                        
                    </div>
                        <div class="flex gap-1">
                           <a class="bg-zinc-700 cursor-pointer text-white px-1 py-1.5 text-[12px] align-middle text-center rounded-lg w-1/3 " href="https://landingpageone.vercel.app/">
                        Live Link
                    </a>
                        <a class="bg-zinc-700 cursor-pointer text-white px-1 py-1.5 text-[12px] align-middle  text-center rounded-lg w-1/3 " href="https://github.com/Rohitlodhii/landingPageOne">
                        <div >Github</div></a>
                        </div>
                </div>
            </div>

         

           
           

              </div>

            
           

        </div>




        {{-- Get in touch --}}

        

        <div class="max-w-lg mx-auto p-6 flex flex-col md:gap-3 gap-1 md:text-center md:my-36 my-3">
            <div class="inline-block px-3 py-1  text-sm font-semibold text-white bg-black rounded-md max-w-fit md:mx-auto">Contact</div>
            <h1 class="md:text-4xl text-2xl font-bold tracking-tight ">Get in Touch</h1>
            <p class="text-zinc-500  md:text-lg text-sm tracking-tight ">
                Want to connect? Just Dm me  on 
              <a href="https://instagram.com/rohitlodhiii" class="text-blue-500 underline">Instagram,</a> 
              and I'll get back to you as soon as I can.
            </p>
          </div>




          <div class="text-white  max-w-lg text-center mx-auto">Made by Rohit Lodhi</div>
          

    </div>
</body>
</html>