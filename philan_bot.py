import discord
from discord.ext import commands
import requests
import os

TOKEN = #removed as cannot be uploaded to github openly
API_KEY  = #removed as cannot be uploaded to github openly
BASE_URL = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json'
client =   commands.Bot(command_prefix = '?',intents = discord.Intents.all())

@client.event
async def on_ready():
    print(f'\n\n{client.user} has connected to Discord!')

@client.event
async def on_member_join(member):
    await member.send(f"Welcome to Philanthropists Server!!")

@client.command()
async def hello(ctx):
    print(f'{ctx.message.author}')
    await ctx.send(f"Hello!")
n
@client.command()
async def findslums(ctx, location):
    print(f'{ctx.message.author}')
    """Command to find places near a given location"""
    params = {
        'location': location,
        'radius': 5000,  #meters
        'type': 'slums',  
        'key': API_KEY
    }

    response = requests.get(BASE_URL, params=params)
    data = response.json()

    results = data.get('results', [])
    print(results)
    if(len(results) != 0):
        for result in results:
            name = result.get('name', 'Unknown')
            vicinity = result.get('vicinity', 'Unknown')
            await ctx.send(f'Name: {name}\nVicinity: {vicinity}')
    else:
        await ctx.send('Failed to retrieve data from GooglePlaces API')

@client.command()
async def donation(ctx):
    msg = '''Here's the procedure: '''
    MSG = discord.Embed(title="Donation Procedure", description = msg, color = 0x00ff00);
    MSG.add_field(name = "Step 1.", value = "Find the location using site or bot", inline = False)
    MSG.add_field(name = "Step 2.", value = "Prepare the material for donations.", inline = False)
    MSG.add_field(name = "Step 3.", value = "Choose any location from the suggestions and you may visit the place and donate.", inline = False)
    MSG.add_field(name = "Step 4.", value = "After the donation, visit the website and find the tab \"Record Here\"", inline = False)
    MSG.add_field(name = "Step 5.", value = "Go to the tab and get your donation recorded by filling the form on the website", inline = False)
    MSG.add_field(name = "Step 6.", value = "After submiting the form withing 24 working hours your donation shall be verfied by the officals and the approopriate reward points shall be awarded to your profile.", inline = False)
    MSG.add_field(name = "\nThank You", value = "")
    await ctx.send(embed = MSG)


@client.event
async def on_message(message):
    await client.process_commands(message)
    if message.author == client.user:
        return
    
    if message.content.lower() == "hello" :
        await message.channel.send("Hello")

    if  "bot find slums " in message.content.lower():
        print(f'{message.author}')
        location = message.content.lower()[14:]
        params = {
            'location': location,
            'radius': 5000,  #meters
            'type': 'restaurants', 
            'key': API_KEY
        }

        response = requests.get(BASE_URL, params=params)
        data = response.json()

        results = data.get('results', [])
        print(results)
        if(len(results)!=0):
            for result in results:
                name = result.get('name', 'Unknown')
                vicinity = result.get('vicinity', 'Unknown')
                await message.channel.send(f'Name: {name}\nVicinity: {vicinity}')    
        else:
            await message.channel.send('Failed to retrieve data from GooglePlaces API')

    if "procedure" in message.content.lower() and "donation" in message.content.lower():
        msg = '''Here's the procedure: '''
        MSG = discord.Embed(title="Donation Procedure", description = msg, color = 0x00ff00);
        MSG.add_field(name = "Step 1.", value = "Find the location using site or bot", inline = False)
        MSG.add_field(name = "Step 2.", value = "Prepare the material for donations.", inline = False)
        MSG.add_field(name = "Step 3.", value = "Choose any location from the suggestions and you may visit the place and donate.", inline = False)
        MSG.add_field(name = "Step 4.", value = "After the donation, visit the website and find the tab \"Record Here\"", inline = False)
        MSG.add_field(name = "Step 5.", value = "Go to the tab and get your donation recorded by filling the form on the website", inline = False)
        MSG.add_field(name = "Step 6.", value = "After submiting the form withing 24 working hours your donation shall be verfied by the officals and the approopriate reward points shall be awarded to your profile.", inline = False)
        MSG.add_field(name = "\nThank You", value = "")
        await message.channel.send(embed = MSG)

    
        

client.run(TOKEN)