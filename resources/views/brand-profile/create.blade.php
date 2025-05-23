@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 flex items-center justify-center px-4">
    <div class="w-full max-w-2xl bg-gray-800 p-8 rounded-lg shadow-lg" x-data="{ tab: 'general' }">
        <!-- Tab Navigation -->
        <div class="flex mb-6 space-x-2">
            <button
                class="px-4 py-2 rounded-t-lg focus:outline-none transition-all duration-200"
                :class="tab === 'general' ? 'bg-gray-700 text-white font-semibold' : 'bg-gray-600 text-gray-300'"
                @click="tab = 'general'">
                General Information
            </button>
            <button
                class="px-4 py-2 rounded-t-lg focus:outline-none transition-all duration-200"
                :class="tab === 'business' ? 'bg-gray-700 text-white font-semibold' : 'bg-gray-600 text-gray-300'"
                @click="tab = 'business'">
                Business Information
            </button>
            <button
                class="px-4 py-2 rounded-t-lg focus:outline-none transition-all duration-200"
                :class="tab === 'address' ? 'bg-gray-700 text-white font-semibold' : 'bg-gray-600 text-gray-300'"
                @click="tab = 'address'">
                Address Form
            </button>
        </div>

        <!-- General Information Form -->
        <div x-show="tab === 'general'" x-transition>
            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Business Logo -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Upload Business Logo</label>
                    <input type="file" name="business_logo" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none" required>
                </div>

                <!-- Friendly Business Name -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Friendly Business Name</label>
                    <input type="text" name="name" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none" required>
                </div>

                <!-- Legal Business Name -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Legal Business Name</label>
                    <input type="text" name="legal_name" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none" required>
                </div>

                <!-- Business Email -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Business Email</label>
                    <input type="email" name="business_email" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none" required>
                </div>

                <!-- Business Phone -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Business Phone</label>
                    <input type="text" name="business_phone" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none" required>
                </div>

                <!-- Branded Domain -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Branded Domain</label>
                    <input type="text" name="branded_domain" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none">
                </div>

                <!-- Business Website -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Business Website</label>
                    <input type="text" name="business_website" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none">
                </div>

                <!-- Business Niche -->
                <div class="mb-4">
                    <label class="block text-white mb-2">Business Niche</label>
                    <select name="business_niche" class="w-full px-4 py-2 bg-white text-black rounded-lg focus:outline-none" required>
                        <option value="">Select Business Niche</option>
                        <!-- A -->
                        <option value="Abarth Dealer">Abarth Dealer: Automotive Sales, Italian Sports Car Dealer</option>
                        <option value="Aboriginal Art Gallery">Aboriginal Art Gallery: Art Gallery, Fine Art, Indigenous Australian Art, Aboriginal Art</option>
                        <option value="Abrasives Supplier">Abrasives Supplier: Industrial Supplies, Manufacturing Equipment, Abrasive Materials, Grinding Wheels</option>
                        <option value="Abundant Life Church">Abundant Life Church: Religious Organization, Christian Church, Non-Denominational Church, Evangelical Church</option>
                        <option value="Acaraje Restaurant">Acaraje Restaurant: African Cuisine, Street Food, Nigerian Cuisine, Bahian Cuisine</option>
                        <!-- B -->
                        <option value="Bakery">Bakery: Food Production, Retail, Bread, Pastries, Cakes</option>
                        <option value="Barber Shop">Barber Shop: Personal Services, Hair Salon, Men's Haircuts, Shaving</option>
                        <option value="Barista Training">Barista Training: Education, Hospitality, Coffee Training, Barista Certification</option>
                        <option value="Beauty Salon">Beauty Salon: Personal Services, Hair Salon, Nail Salon, Makeup Artistry, Skincare</option>
                        <option value="Bike Shop">Bike Shop: Retail, Sporting Goods, Bicycles, Cycling Accessories</option>
                        <option value="Bistro">Bistro: Restaurant, French Cuisine, Casual Dining, Small Plates</option>
                        <option value="Bookstore">Bookstore: Retail, Books, Used Books, New Books, E-books</option>
                        <option value="Boutique">Boutique: Retail, Clothing, Accessories, Fashion, Unique Items</option>
                        <option value="Brewery">Brewery: Food Production, Beverage, Beer, Craft Beer, Microbrewery</option>
                        <option value="Bridal Shop">Bridal Shop: Retail, Clothing, Accessories, Wedding Dresses, Bridal Gowns</option>
                        <!-- C -->
                        <option value="Café">Café: Restaurant, Coffee Shop, Coffee, Tea, Snacks</option>
                        <option value="Cannabis Dispensary">Cannabis Dispensary: Retail, Legal Products, Cannabis, Marijuana, CBD Products</option>
                        <option value="Carpenter">Carpenter: Construction, Home Improvement, Woodworking, Cabinetry, Remodeling</option>
                        <option value="Catering Service">Catering Service: Food Service, Events, Corporate Catering, Wedding Catering, Party Catering</option>
                        <option value="Ceramic Studio">Ceramic Studio: Arts and Crafts, Workshops, Pottery, Ceramics, Art Classes</option>
                        <option value="Charcuterie Board Shop">Charcuterie Board Shop: Food Retail, Gourmet Foods, Charcuterie, Cheese, Meat</option>
                        <option value="Chiropractor">Chiropractor: Healthcare, Alternative Medicine, Spinal Adjustments, Pain Management</option>
                        <option value="Chocolate Shop">Chocolate Shop: Food Retail, Confectionery, Chocolate, Candy, Chocolates</option>
                        <option value="Cleaning Service">Cleaning Service: Home Services, Commercial Services, House Cleaning, Office Cleaning, Janitorial Services</option>
                        <option value="Clothing Boutique">Clothing Boutique: Retail, Fashion, Women's Clothing, Men's Clothing, Boutique Clothing</option>
                        <!-- D -->
                        <option value="Dance Studio">Dance Studio: Education, Arts and Entertainment, Dance Classes, Ballet, Jazz, Hip Hop</option>
                        <option value="Dental Clinic">Dental Clinic: Healthcare, Dentistry, Dental Exams, Teeth Cleaning, Dental Implants</option>
                        <option value="Design Agency">Design Agency: Creative Services, Graphic Design, Web Design, Branding, Logo Design</option>
                        <option value="Digital Marketing Agency">Digital Marketing Agency: Marketing, Advertising, SEO, PPC, Social Media Marketing</option>
                        <option value="DIY Store">DIY Store: Retail, Home Improvement, Hardware, Tools, DIY Supplies</option>
                        <option value="Dog Walker">Dog Walker: Pet Services, Pet Care, Dog Walking, Dog Sitting</option>
                        <option value="Drive-Thru Coffee Shop">Drive-Thru Coffee Shop: Food Service, Coffee Shop, Coffee, Fast Food</option>
                        <option value="Dry Cleaner">Dry Cleaner: Laundry Service, Personal Services, Dry Cleaning, Laundry, Alterations</option>
                        <!-- E -->
                        <option value="Eco-Friendly Store">Eco-Friendly Store: Retail, Sustainable Products, Organic Products, Fair Trade, Eco-Conscious</option>
                        <option value="Electric Vehicle Charging Station">Electric Vehicle Charging Station: Automotive Services, Electric Vehicle Infrastructure, Charging Stations</option>
                        <option value="Electronics Repair Shop">Electronics Repair Shop: Repair Services, Electronics Repair, Computer Repair, Phone Repair</option>
                        <option value="Embroidery Service">Embroidery Service: Creative Services, Personalization, Embroidery, Custom Embroidery, Logo Embroidery</option>
                        <option value="Event Planner">Event Planner: Event Services, Party Planning, Wedding Planning, Corporate Events, Event Management</option>
                        <option value="Eyewear Store">Eyewear Store: Retail, Accessories, Glasses, Sunglasses, Contact Lenses</option>
                        <!-- F -->
                        <option value="Farm-to-Table Restaurant">Farm-to-Table Restaurant: Restaurant, Local Cuisine, Fresh Produce, Sustainable Food, Local Sourcing</option>
                        <option value="Fashion Designer">Fashion Designer: Creative Services, Clothing, Fashion Design, Custom Clothing, Haute Couture</option>
                        <option value="Fitness Studio">Fitness Studio: Health and Wellness, Gym, Workout Classes, Yoga, Pilates</option>
                        <option value="Florist">Florist: Retail, Flowers, Flower Arrangements, Bouquets, Floral Design</option>
                        <option value="Food Truck">Food Truck: Food Service, Mobile Food, Street Food, Food Cart</option>
                        <option value="Freelance Writer">Freelance Writer: Creative Services, Content Creation, Copywriting, Article Writing, Blog Writing</option>
                        <!-- G -->
                        <option value="Game Store">Game Store: Retail, Games, Video Games, Board Games, Role-Playing Games</option>
                        <option value="Garden Center">Garden Center: Retail, Plants, Gardening Supplies, Nursery, Landscaping Supplies</option>
                        <option value="Gas Station">Gas Station: Automotive Services, Convenience Store, Fuel, Gas, Convenience Items</option>
                        <option value="Gift Shop">Gift Shop: Retail, Gifts, Souvenirs, Novelty Items, Gift Baskets</option>
                        <option value="Graphic Designer">Graphic Designer: Creative Services, Design, Logo Design, Branding, Graphic Design Services</option>
                        <option value="Grocery Store">Grocery Store: Retail, Food, Groceries, Produce, Meat, Dairy</option>
                        <option value="Gym">Gym: Health and Wellness, Fitness, Workout Equipment, Gym Membership, Fitness Classes</option>
                        <!-- H -->
                        <option value="Hair Salon">Hair Salon: Personal Services, Beauty, Haircuts, Styling, Hair Coloring</option>
                        <option value="Hardware Store">Hardware Store: Retail, Home Improvement, Tools, Hardware, Building Supplies</option>
                        <option value="Health Food Store">Health Food Store: Retail, Food, Supplements, Vitamins, Health Products</option>
                        <option value="Herbal Tea Shop">Herbal Tea Shop: Food Retail, Beverages, Herbal Tea, Tea, Organic Tea</option>
                        <option value="Hiking Gear Store">Hiking Gear Store: Retail, Sporting Goods, Hiking Equipment, Camping Gear, Outdoor Gear</option>
                        <option value="Home Decor Store">Home Decor Store: Retail, Home Improvement, Home Decor, Furniture, Home Accessories</option>
                        <option value="Home Theater Installation">Home Theater Installation: Home Services, Technology, Home Theater Systems, Audio Video Installation</option>
                        <option value="Hostel">Hostel: Hospitality, Lodging, Budget Accommodation, Backpackers, Hostels</option>
                        <!-- I -->
                        <option value="Ice Cream Shop">Ice Cream Shop: Food Retail, Desserts, Ice Cream, Frozen Yogurt, Ice Cream Sundaes</option>
                        <option value="Interior Designer">Interior Designer: Creative Services, Home Improvement, Interior Design, Home Decor, Space Planning</option>
                        <!-- J -->
                        <option value="Jewelry Store">Jewelry Store: Retail, Accessories, Jewelry, Fine Jewelry, Watches</option>
                        <option value="Juice Bar">Juice Bar: Food Service, Beverages, Juice, Smoothies, Healthy Drinks</option>
                        <option value="Japanese Restaurant">Japanese Restaurant: Restaurant, Asian Cuisine, Japanese Food, Sushi, Ramen</option>
                        <!-- K -->
                        <option value="Kayaking Rental">Kayaking Rental: Outdoor Activities, Recreation, Water Sports, Kayaking, Boat Rentals</option>
                        <option value="Kitchen Supply Store">Kitchen Supply Store: Retail, Home Improvement, Kitchen Supplies, Cooking Utensils, Kitchenware</option>
                        <!-- L -->
                        <option value="Landscaping Service">Landscaping Service: Home Services, Outdoor Maintenance, Lawn Care, Gardening, Landscaping</option>
                        <option value="Laundry Service">Laundry Service: Personal Services, Cleaning, Laundry, Dry Cleaning, Laundry Pickup</option>
                        <option value="Law Firm">Law Firm: Legal Services, Attorneys, Lawyers, Legal Advice, Legal Representation</option>
                        <option value="Leather Goods Shop">Leather Goods Shop: Retail, Accessories, Leather Bags, Leather Jackets, Leather Goods</option>
                        <option value="Library">Library: Public Services, Education, Books, Reading, Research</option>
                        <option value="Lingerie Shop">Lingerie Shop: Retail, Clothing, Lingerie, Underwear, Intimates</option>
                        <!-- M -->
                        <option value="Massage Therapist">Massage Therapist: Personal Services, Wellness, Massage Therapy, Bodywork, Relaxation</option>
                        <option value="Mechanic">Mechanic: Automotive Services, Repair, Car Repair, Auto Repair, Mechanic Services</option>
                        <option value="Medical Clinic">Medical Clinic: Healthcare, Doctors, Clinics, General Practice, Family Medicine</option>
                        <option value="Mental Health Counseling">Mental Health Counseling: Healthcare, Therapy, Counseling, Psychotherapist, Psychologist</option>
                        <option value="Merchandise Store">Merchandise Store: Retail, General Merchandise, Department Store, Variety Store, Discount Store</option>
                        <option value="Microbrewery">Microbrewery: Food Production, Beverage, Beer, Craft Beer, Microbrewery</option>
                        <option value="Motorcycle Repair Shop">Motorcycle Repair Shop: Automotive Services, Repair, Motorcycle Repair, Motorcycle Maintenance</option>
                        <option value="Movie Theater">Movie Theater: Entertainment, Movies, Cinemas, Film, Movie Tickets</option>
                        <!-- N -->
                        <option value="Nail Salon">Nail Salon: Personal Services, Beauty, Manicures, Pedicures, Nail Art</option>
                        <option value="Natural Food Store">Natural Food Store: Retail, Food, Health Products, Organic Food, Natural Products</option>
                        <option value="Neighborhood Grocery Store">Neighborhood Grocery Store: Retail, Food, Local Grocery Store, Convenience Store</option>
                        <option value="Nightclub">Nightclub: Entertainment, Nightlife, Music, Dancing, Nightclubs</option>
                        <option value="Nursing Home">Nursing Home: Healthcare, Elder Care, Assisted Living, Nursing Homes, Senior Care</option>
                        <!-- O -->
                        <option value="Office Supply Store">Office Supply Store: Retail, Office Equipment, Office Supplies, Stationery, Printing</option>
                        <option value="Organic Food Store">Organic Food Store: Retail, Food, Health Products, Organic Food, Natural Products</option>
                        <option value="Outdoor Gear Store">Outdoor Gear Store: Retail, Sporting Goods, Camping Gear, Hiking Gear, Outdoor Equipment</option>
                        <!-- P -->
                        <option value="Paint Shop">Paint Shop: Retail, Home Improvement, Paint, Paint Supplies, Painting Supplies</option>
                        <option value="Party Rental Store">Party Rental Store: Event Services, Rentals, Party Rentals, Event Rentals, Equipment Rentals</option>
                        <option value="Pet Store">Pet Store: Retail, Pet Supplies, Dog Food, Cat Food, Pet Accessories</option>
                        <option value="Pharmacy">Pharmacy: Healthcare, Retail, Prescription Drugs, Over-the-Counter Medications, Health Products</option>
                        <option value="Photography Studio">Photography Studio: Creative Services, Photography, Portrait Photography, Wedding Photography, Photography Services</option>
                        <option value="Pizza Place">Pizza Place: Restaurant, Fast Food, Pizza, Italian Food, Delivery</option>
                        <option value="Plumbing Service">Plumbing Service: Home Services, Repair, Plumbing, Plumbing Repair, Plumbing Installation</option>
                        <option value="Podcast Studio">Podcast Studio: Creative Services, Media, Podcasts, Audio Production, Podcasting</option>
                        <option value="Pool Cleaning Service">Pool Cleaning Service: Home Services, Outdoor Maintenance, Pool Cleaning, Pool Maintenance</option>
                        <option value="Print Shop">Print Shop: Creative Services, Printing, Printing Services, Printing Press, Printing Equipment</option>
                        <!-- Q -->
                        <option value="Quick Service Restaurant">Quick Service Restaurant: Food Service, Fast Food, Fast Casual, Quick Service, Fast Food Restaurants</option>
                        <!-- R -->
                        <option value="Real Estate Agency">Real Estate Agency: Real Estate Services, Real Estate Agents, Buying Homes, Selling Homes, Property Management</option>
                        <option value="Record Store">Record Store: Retail, Music, Vinyl Records, CDs, Music Collectibles</option>
                        <option value="Recycling Center">Recycling Center: Environmental Services, Recycling, Waste Management, Recycling Facilities</option>
                        <option value="Restaurant">Restaurant: Food Service, Dining, Cuisine, Food, Restaurants</option>
                        <option value="Retail Store">Retail Store: Retail, Stores, Shopping, Retail</option>
                        <!-- S -->
                        <option value="Salon">Salon: Personal Services, Beauty, Hair Salon, Nail Salon, Spa</option>
                        <option value="Seafood Restaurant">Seafood Restaurant: Restaurant, Seafood, Fish, Seafood Dishes, Seafood Market</option>
                        <option value="Sewing Shop">Sewing Shop: Creative Services, Clothing, Sewing, Alterations, Custom Sewing</option>
                        <option value="Shoe Repair Shop">Shoe Repair Shop: Repair Services, Shoe Repair, Shoe Repair Services, Cobbler</option>
                        <option value="Spa">Spa: Personal Services, Wellness, Massage, Facials, Beauty Treatments</option>
                        <option value="Sporting Goods Store">Sporting Goods Store: Retail, Sports Equipment, Athletic Equipment, Sportswear</option>
                        <option value="Stationery Store">Stationery Store: Retail, Office Supplies, Stationery, Paper, Pens, Notebooks</option>
                        <option value="Sushi Restaurant">Sushi Restaurant: Restaurant, Asian Cuisine, Japanese Food, Sushi, Sushi Rolls</option>
                        <option value="Swimming Pool Supply Store">Swimming Pool Supply Store: Retail, Home Improvement, Pool Supplies, Pool Equipment, Pool Maintenance</option>
                        <!-- T -->
                        <option value="Tattoo Parlor">Tattoo Parlor: Personal Services, Body Art, Tattoos, Tattoo Artist, Tattoo Studio</option>
                        <option value="Tea Shop">Tea Shop: Food Service, Beverages, Tea, Tea Shop, Tea House</option>
                        <option value="Tech Repair Shop">Tech Repair Shop: Repair Services, Technology Repair, Computer Repair, Phone Repair</option>
                        <option value="Thrift Store">Thrift Store: Retail, Secondhand Goods, Thrift Shop, Consignment Shop</option>
                        <option value="Toy Store">Toy Store: Retail, Toys, Children's Toys, Games, Puzzles</option>
                        <option value="Travel Agency">Travel Agency: Travel Services, Travel Agent, Vacation Packages, Flight Bookings, Hotel Reservations</option>
                        <option value="Tree Service">Tree Service: Home Services, Outdoor Maintenance, Tree Removal, Tree Trimming, Arborist Services</option>
                        <!-- U -->
                        <option value="Used Car Dealer">Used Car Dealer: Automotive Sales, Used Cars, Pre-Owned Cars, Car Dealer</option>
                        <!-- V -->
                        <option value="Veterinary Clinic">Veterinary Clinic: Healthcare, Pet Care, Veterinarian, Animal Care, Pet Hospital</option>
                        <option value="Vintage Clothing Store">Vintage Clothing Store: Retail, Fashion, Vintage Clothing, Retro Clothing, Secondhand Clothing</option>
                        <!-- W -->
                        <option value="Warehouse Store">Warehouse Store: Retail, Bulk Goods, Wholesale, Discount Store, Warehouse Club</option>
                        <option value="Web Design Agency">Web Design Agency: Creative Services, Design, Web Design, Website Design, Web Development</option>
                        <option value="Wedding Planner">Wedding Planner: Event Services, Party Planning, Wedding Planning, Wedding Coordinator, Wedding Services</option>
                        <option value="Wine Shop">Wine Shop: Retail, Beverages, Wine, Wine Tasting, Wine Cellar</option>
                        <option value="Workshop">Workshop: Education, Skills Training, Workshops, Classes, Training</option>
                        <!-- X -->
                        <option value="X-Ray Clinic">X-Ray Clinic: Healthcare, Medical Imaging, X-Rays, Radiology, Imaging Services</option>
                        <!-- Y -->
                        <option value="Yoga Studio">Yoga Studio: Health and Wellness, Fitness, Yoga, Yoga Classes, Yoga Instructor</option>
                        <!-- Z -->
                        <option value="Zoo">Zoo: Entertainment, Attractions, Animals, Wildlife, Zoo Animals</option>
                    </select>
                </div>

                <!-- Submit -->
                <div class="text-right">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">Save</button>
                </div>
            </form>
        </div>


        <!-- Business Information Tab -->
        <div x-show="tab === 'business'" x-transition>
            <div class="bg-gray-700 p-6 rounded-lg mt-2">
                <form action="{{ route('brand.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-white mb-2">Business Type</label>
                        <select name="business_type" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                            <option>Accounting</option>
                            <option>Advertising</option>
                            <option>Aerospace</option>
                            <option>Agriculture</option>
                            <option>AI (Artificial Intelligence)</option>
                            <option>Architecture</option>
                            <option>Automotive</option>
                            <option>Banking</option>
                            <option>Beauty</option>
                            <option>Biotechnology</option>
                            <option>Broadcasting</option>
                            <option>Business Consulting</option>
                            <option>Catering</option>
                            <option>Cleaning Services</option>
                            <option>Clothing</option>
                            <option>Coaching</option>
                            <option>Co-operative</option>
                            <option>Corporation</option>
                            <option>Consulting</option>
                            <option>Construction</option>
                            <option>Cybersecurity</option>
                            <option>Data Analysis</option>
                            <option>Design (Graphic, Web, Interior)</option>
                            <option>Education</option>
                            <option>E-commerce</option>
                            <option>Entertainment</option>
                            <option>Fashion</option>
                            <option>Finance</option>
                            <option>Food and Beverage</option>
                            <option>Gaming</option>
                            <option>Healthcare</option>
                            <option>Hospitality</option>
                            <option>Human Resources</option>
                            <option>Insurance</option>
                            <option>IT (Information Technology)</option>
                            <option>Jewelry</option>
                            <option>Law</option>
                            <option>Limited Liability Company Or Sole-Proprietorship</option>
                            <option>Logistics</option>
                            <option>Marketing</option>
                            <option>Media</option>
                            <option>Manufacturing</option>
                            <option>Music</option>
                            <option>Non-profit Corporation</option>
                            <option>Non-Profit</option>
                            <option>Oil and Gas</option>
                            <option>Partnership</option>
                            <option>Photography</option>
                            <option>Real Estate</option>
                            <option>Retail</option>
                            <option>Sales</option>
                            <option>Software Development</option>
                            <option>Technology</option>
                            <option>Telecommunications</option>
                            <option>Transportation</option>
                            <option>Travel</option>
                            <option>Veterinary Services</option>
                            <option>Writing</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2">Business Industry</label>
                        <input type="text" name="business_industry" class="w-full px-4 py-2 rounded-lg bg-white text-black" placeholder="Select from Business Industry">
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2">Business Registration ID Type</label>
                        <select name="registration_id_type" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                            <option>USA: Employer Identification Number (EIN)</option>
                            <option>Canada: Canadian Corporation Number (CCN)</option>
                            <option>Great Britain: Company Number</option>
                            <option>Australia: Company Number from ASIC (ACN)</option>
                            <option>India: Corporate Identity Number</option>
                            <option>Estonia: VAT Number</option>
                            <option>Romania: VAT Registration Number</option>
                            <option> Israel :Registration Number</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2">Business Registration Number</label>
                        <input type="text" name="registration_number" class="w-full px-4 py-2 rounded-lg bg-white text-black" placeholder="(Not provided)">
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2">Business Regions of Operations</label>
                        <input type="text" name="regions_of_operations" class="w-full px-4 py-2 rounded-lg bg-white text-black" placeholder="Africa, Asia, Europe, Latin America, USA and Canada">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>



        <!-- Address Form Tab -->
        <div x-show="tab === 'address'" x-transition>
            <div class="bg-gray-700 p-6 rounded-lg mt-2">
                <form action="{{ route('brand.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-white mb-2">Street Address</label>
                        <input type="text" name="street_address" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                    </div>
                    <div class="mb-4 flex space-x-2">
                        <div class="w-1/2">
                            <label class="block text-white mb-2">City</label>
                            <input type="text" name="city" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-white mb-2">Postal/Zip Code</label>
                            <input type="text" name="postal_code" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                        </div>
                    </div>
                    <div class="mb-4 flex space-x-2">
                        <div class="w-1/2">
                            <label class="block text-white mb-2">State/Prov/Region</label>
                            <input type="text" name="state" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-white mb-2">Country</label>
                            <input type="text" name="country" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2">Time Zone</label>
                        <input type="text" name="time_zone" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2">Platform Language</label>
                        <input type="text" name="platform_language" class="w-full px-4 py-2 rounded-lg bg-white text-black">
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2">Authorised Representative</label>
                        <input type="text" name="rep_first_name" class="w-full px-4 py-2 rounded-lg bg-white text-black mt-2" placeholder="First Name">
                        <input type="text" name="rep_last_name" class="w-full px-4 py-2 rounded-lg bg-white text-black mt-2" placeholder="Last Name">
                        <input type="email" name="rep_email" class="w-full px-4 py-2 rounded-lg bg-white text-black mt-2" placeholder="Representative Email">
                        <input type="text" name="rep_job_position" class="w-full px-4 py-2 rounded-lg bg-white text-black mt-2" placeholder="Job Position" list="job_positions">
                        <datalist id="job_positions">
                            <option value="Director">
                            <option value="GM">
                            <option value="VP">
                            <option value="CEO">
                            <option value="CFO">
                            <option value="General Counsel">
                            <option value="Other">
                        </datalist>
                        <input type="text" name="rep_phone" class="w-full px-4 py-2 rounded-lg bg-white text-black mt-2" placeholder="Phone Number (With Country Code)">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection