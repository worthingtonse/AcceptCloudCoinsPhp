using System;
using System.Collections.Generic;
using System.IO;
using System.Text;
using Newtonsoft.Json;

using System.Linq;


    public class FoundersFileUtils
    {
        /* INSTANCE VARIABLES */
        public String rootFolder;
        public String importFolder;
        public String importedFolder;
        public String trashFolder;
        public String suspectFolder;
        public String frackedFolder;
        public String bankFolder;
        public String templateFolder;
        public String counterfeitFolder;
        public String directoryFolder;
        public String exportFolder;
        public String partialFolder;
        public String languageFolder;
        public String detectedFolder;
        public String receiptsFolder;
        public String dangerFolder;
        public String lostFolder;


        public static FoundersFileUtils GetInstance(String rootFolder)
        {
            String importFolder = rootFolder + "Import" + Path.DirectorySeparatorChar;
            String importedFolder = rootFolder + "Imported" + Path.DirectorySeparatorChar;
            String trashFolder = rootFolder + "Trash" + Path.DirectorySeparatorChar;
            String suspectFolder = rootFolder + "Suspect" + Path.DirectorySeparatorChar;
            String frackedFolder = rootFolder + "Fracked" + Path.DirectorySeparatorChar;
            String bankFolder = rootFolder + "Bank" + Path.DirectorySeparatorChar;
            String templateFolder = rootFolder + "Templates" + Path.DirectorySeparatorChar;
            String counterfeitFolder = rootFolder + "Counterfeit" + Path.DirectorySeparatorChar;
            String directoryFolder = rootFolder + "Directory" + Path.DirectorySeparatorChar;
            String exportFolder = rootFolder + "Export" + Path.DirectorySeparatorChar;
            String languageFolder = rootFolder + "Language" + Path.DirectorySeparatorChar;
            String partialFolder = rootFolder + "Partial" + Path.DirectorySeparatorChar;
            String detectedFolder = rootFolder + "Detected" + Path.DirectorySeparatorChar;
            String receiptsFolder = rootFolder + "Receipts" + Path.DirectorySeparatorChar;
            String dangerFolder = rootFolder + "Danger" + Path.DirectorySeparatorChar;
            String lostFolder = rootFolder + "Lost" + Path.DirectorySeparatorChar;

            FoundersFileUtils fileUtils = new FoundersFileUtils(rootFolder, importFolder, importedFolder, trashFolder, suspectFolder, frackedFolder, bankFolder, templateFolder, counterfeitFolder, directoryFolder, exportFolder, partialFolder, detectedFolder, receiptsFolder, dangerFolder, lostFolder);

            return fileUtils;
        }
        /* CONSTRUCTOR */
        public FoundersFileUtils(String rootFolder, String importFolder, String importedFolder, String trashFolder, String suspectFolder, String frackedFolder, String bankFolder, String templateFolder, String counterfeitFolder, String directoryFolder, String exportFolder, String partialFolder, String detectedFolder, String receiptsFolder, String dangerFolder, String lostFolder)
        {
            //  initialize instance variables
            this.rootFolder = rootFolder;
            this.importFolder = importFolder;
            this.importedFolder = importedFolder;
            this.trashFolder = trashFolder;
            this.suspectFolder = suspectFolder;
            this.frackedFolder = frackedFolder;
            this.bankFolder = bankFolder;
            this.templateFolder = templateFolder;
            this.counterfeitFolder = counterfeitFolder;
            this.directoryFolder = directoryFolder;
            this.exportFolder = exportFolder;
            this.partialFolder = partialFolder;
            this.detectedFolder = detectedFolder;
            this.receiptsFolder = receiptsFolder;
            this.dangerFolder = dangerFolder;
            this.lostFolder = lostFolder;

        }  // End constructor

        /* PUBLIC METHODS */

        // This loads a JSON file (.stack) from the hard drive that contains only one CloudCoin and turns it into an object. 
        //   This uses Newton soft but causes a enrror System.IO.FileNotFoundException. Could not load file 'Newtonsoft.Json'  
        public FoundersCloudCoin loadOneCloudCoinFromJsonFile(String loadFilePath)
        {

            FoundersCloudCoin returnCC = new FoundersCloudCoin();

            //Load file as JSON
            String incomeJson = this.importJSON(loadFilePath);
            //STRIP UNESSARY test
            int secondCurlyBracket = ordinalIndexOf(incomeJson, "{", 2) - 1;
            int firstCloseCurlyBracket = ordinalIndexOf(incomeJson, "}", 0) - secondCurlyBracket;
            // incomeJson = incomeJson.Substring(secondCurlyBracket, firstCloseCurlyBracket);
            incomeJson = incomeJson.Substring(secondCurlyBracket, firstCloseCurlyBracket + 1);
            // Console.Out.WriteLine(incomeJson);
            //Deserial JSON

            try
            {
                returnCC = JsonConvert.DeserializeObject<FoundersCloudCoin>(incomeJson);
            }
            catch (JsonReaderException)
            {
                Console.WriteLine("There was an error reading files in your bank.");
                CoreLogger.Log("There was an error reading files in your bank.");
                Console.WriteLine("You may have the aoid memo bug that uses too many double quote marks.");
                Console.WriteLine("Your bank files are stored using and older version that did not use properly formed JSON.");
                Console.WriteLine("Would you like to upgrade these files to the newer standard?");
                Console.WriteLine("Your files will be edited.");
                Console.WriteLine("1 for yes, 2 for no.");
                KeyboardReader reader = new KeyboardReader();
                int answer = reader.readInt(1, 2);
                if (answer == 1)
                {
                    //Get rid of ed and aoid
                    //Get file names in bank folder
                    String[] fileNames = new DirectoryInfo(bankFolder).GetFiles().Select(o => o.Name).ToArray();
                    for (int i = 0; i < fileNames.Length; i++)
                    {
                        Console.WriteLine("Fixing " + bankFolder + "\\" + fileNames[i]);
                        CoreLogger.Log("Fixing " + bankFolder + "\\" + fileNames[i]);
                        string text = File.ReadAllText(bankFolder + "\\" + fileNames[i]);
                        text = text.Replace("\"aoid\": [\"memo\"=\"\"]", "");
                        File.WriteAllText(bankFolder + "\\" + fileNames[i], text);

                    }//End for all files in bank
                    CoreLogger.Log("Done Fixing. The program will now exit. Please restart. Press any key.");
                    Console.WriteLine("Done Fixing. The program will now exit. Please restart. Press any key.");
                    Console.Read();
                    Environment.Exit(0);
                }
                else
                {
                    CoreLogger.Log("Leaving files as is. You maybe able to fix the manually by editing the files.");
                    Console.WriteLine("Leaving files as is. You maybe able to fix the manually by editing the files.");
                    Console.WriteLine("Done Fixing. The program will now exit. Please restart. Press any key.");
                    Console.Read();
                    Environment.Exit(0);
                }


            }

            return returnCC;
        }//end load one CloudCoin from JSON


        public void CreateDirectoryStructure()
        {
            Directory.CreateDirectory(importFolder);
            Directory.CreateDirectory(importedFolder);
            Directory.CreateDirectory(trashFolder);
            Directory.CreateDirectory(suspectFolder);
            Directory.CreateDirectory(frackedFolder);
            Directory.CreateDirectory(bankFolder);

            Directory.CreateDirectory(templateFolder);
            Directory.CreateDirectory(counterfeitFolder);
            Directory.CreateDirectory(directoryFolder);
            Directory.CreateDirectory(exportFolder);
            Directory.CreateDirectory(partialFolder);
            Directory.CreateDirectory(detectedFolder);
            Directory.CreateDirectory(receiptsFolder);
            Directory.CreateDirectory(dangerFolder);
            Directory.CreateDirectory(lostFolder);

        //            Directory.CreateDirectory(languageFolder);

    }


        public FoundersStack loadManyCloudCoinFromJsonFile(String loadFilePath, string incomeJson)
        {

            FoundersStack returnCC = JsonConvert.DeserializeObject<FoundersStack>(incomeJson);


            return returnCC;
        }//end load one CloudCoin from JSON


        public CloudCoin loadOneCloudCoinFromJPEGFile(String loadFilePath)
        {
            /* GET the first 455 bytes of he jpeg where the coin is located */
            String wholeString = "";
            byte[] jpegHeader = new byte[455];
            Console.Out.WriteLine("Load file path " + loadFilePath);
            CoreLogger.Log("Load file path " + loadFilePath);
            using (FileStream fileStream = new FileStream(loadFilePath, FileMode.Open, FileAccess.Read))
            {
                try
                {
                    int count;                            // actual number of bytes read
                    int sum = 0;                          // total number of bytes read

                    // read until Read method returns 0 (end of the stream has been reached)
                    while ((count = fileStream.Read(jpegHeader, sum, 455 - sum)) > 0)
                        sum += count;  // sum is a buffer offset for next reading
                }
                finally { }
            }
            wholeString = bytesToHexString(jpegHeader);
            CloudCoin returnCC = this.parseJpeg(wholeString);
            // Console.Out.WriteLine("From FileUtils returnCC.fileName " + returnCC.fileName);
            return returnCC;
        }//end load one CloudCoin from JSON

        public String importJSON(String jsonfile)
        {
            String jsonData = "";
            String line;

            try
            {
                // Create an instance of StreamReader to read from a file.
                // The using statement also closes the StreamReader.

                using (var sr = File.OpenText(jsonfile))
                {
                    // Read and display lines from the file until the end of 
                    // the file is reached.
                    while (true)
                    {
                        line = sr.ReadLine();
                        if (line == null)
                        {
                            break;
                        }//End if line is null
                        jsonData = (jsonData + line + "\n");
                    }//end while true
                }//end using
            }
            catch (Exception e)
            {
                // Let the user know what went wrong.
                Console.WriteLine("The file " + jsonfile + " could not be read:");
                CoreLogger.Log("The file " + jsonfile + " could not be read:");
                Console.WriteLine(e.Message);
                CoreLogger.Log(e.Message);
            }
            return jsonData;
        }//end importJSON

        // en d json test
        public String setJSON(FoundersCloudCoin cc)
        {
            const string quote = "\"";
            const string tab = "\t";
            String json = (tab + tab + "{ " + Environment.NewLine);// {
            json += tab + tab + quote + "nn" + quote + ":" + quote + cc.nn + quote + ", " + Environment.NewLine;// "nn":"1",
            json += tab + tab + quote + "sn" + quote + ":" + quote + cc.sn + quote + ", " + Environment.NewLine;// "sn":"367544",
            json += tab + tab + quote + "an" + quote + ": [" + quote;// "an": ["
            for (int i = 0; (i < 25); i++)
            {
                json += cc.an[i];// 8551995a45457754aaaa44
                if (i == 4 || i == 9 || i == 14 || i == 19)
                {
                    json += quote + "," + Environment.NewLine + tab + tab + tab + quote; //", 
                }
                else if (i == 24)
                {
                    // json += "\""; last one do nothing
                }
                else
                { // end if is line break
                    json += quote + ", " + quote;
                }

                // end else
            }// end for 25 ans

            json += quote + "]," + Environment.NewLine;//"],
            // End of ans
            CoinUtils cu = new CoinUtils(cc);
            cu.calcExpirationDate();
            json += tab + tab + quote + "ed" + quote + ":" + quote + cu.cc.ed + quote + "," + Environment.NewLine; // "ed":"9-2016",
            if (string.IsNullOrEmpty(cc.pown)) { cc.pown = "uuuuuuuuuuuuuuuuuuuuuuuuu"; }//Set pown to unknow if it is not set. 
            json += tab + tab + quote + "pown" + quote + ":" + quote + cc.pown + quote + "," + Environment.NewLine;// "pown":"uuupppppffpppppfuuf",
            json += tab + tab + quote + "aoid" + quote + ": []" + Environment.NewLine;
            json += tab + tab + "}" + Environment.NewLine;
            // Keep expiration date when saving (not a truley accurate but good enought )
            return json;
        }
        // end get JSON

        /* Writes a JPEG To the Export Folder */
        public bool writeJpeg(CloudCoin cc, string tag)
        {
           


            
            return true;
        }//end write JPEG

        /* OPEN FILE AND READ ALL CONTENTS AS BYTE ARRAY */
        public byte[] readAllBytes(string fileName)
        {
            byte[] buffer = null;
            using (FileStream fs = new FileStream(fileName, FileMode.Open, FileAccess.Read))
            {
                buffer = new byte[fs.Length];
                int fileLength = Convert.ToInt32(fs.Length);
                fs.Read(buffer, 0, fileLength);
            }
            return buffer;
        }//end read all bytes

        public bool writeTo(String folder, FoundersCloudCoin cc)
        {
            CoinUtils cu = new CoinUtils(cc);
            const string quote = "\"";
            const string tab = "\t";
            String wholeJson = "{" + Environment.NewLine; //{
            bool alreadyExists = true;
            String json = this.setJSON(cc);
            if (!File.Exists(folder + cu.fileName + ".stack"))
            {
                wholeJson += tab + quote + "cloudcoin" + quote + ": [" + Environment.NewLine; // "cloudcoin" : [
                wholeJson += json;
                wholeJson += Environment.NewLine + tab + "]" + Environment.NewLine + "}";
                File.WriteAllText(folder + cu.fileName + ".stack", wholeJson);
            }
            else
            {
                if (folder.Contains("Counterfeit") || folder.Contains("Trash"))
                {
                    //Let the program delete it
                    alreadyExists = false;
                    return alreadyExists;
                }
                else if (folder.Contains("Imported"))
                {
                    File.Delete(folder + cu.fileName + ".stack");
                    File.WriteAllText(folder + cu.fileName + ".stack", wholeJson);
                    alreadyExists = false;
                    return alreadyExists;
                }
                else
                {
                    Console.WriteLine(cu.fileName + ".stack" + " already exists in the folder " + folder);
                    CoreLogger.Log(cu.fileName + ".stack" + " already exists in the folder " + folder);
                    return alreadyExists;

                }//end else

            }//File Exists
            File.WriteAllText(folder + cu.fileName + ".stack", wholeJson);
            alreadyExists = false;
            return alreadyExists;

        }//End Write To

        public void overWrite(String folder, FoundersCloudCoin cc)
        {
            CoinUtils cu = new CoinUtils(cc);
            const string quote = "\"";
            const string tab = "\t";
            String wholeJson = "{" + Environment.NewLine; //{
            String json = this.setJSON(cc);

            wholeJson += tab + quote + "cloudcoin" + quote + ": [" + Environment.NewLine; // "cloudcoin" : [
            wholeJson += json;
            wholeJson += Environment.NewLine + tab + "]" + Environment.NewLine + "}";

            File.WriteAllText(folder + cu.fileName + ".stack", wholeJson);
        }//End Overwrite

        private CloudCoin parseJpeg(String wholeString)
        {

            CloudCoin cc = new CloudCoin();
            int startAn = 40;
            for (int i = 0; i < 25; i++)
            {

                cc.an[i] = wholeString.Substring(startAn, 32);
                // Console.Out.WriteLine(i +": " + cc.an[i]);
                startAn += 32;
            }

            // end for
            cc.aoid = null;
            // wholeString.substring( 840, 895 );
            //cc.hp = 25;
            // Integer.parseInt(wholeString.substring( 896, 896 ), 16);
            cc.ed = wholeString.Substring(898, 4);
            cc.nn = Convert.ToInt32(wholeString.Substring(902, 2), 16);
            cc.sn = Convert.ToInt32(wholeString.Substring(904, 6), 16);
            cc.pown = "uuuuuuuuuuuuuuuuuuuuuuuuu";
            //  Console.Out.WriteLine("parseJpeg cc.fileName " + cc.fileName);
            return cc;
        }// end parse Jpeg

        // en d json test
        public byte[] hexStringToByteArray(String HexString)
        {
            int NumberChars = HexString.Length;
            byte[] bytes = new byte[NumberChars / 2];
            for (int i = 0; i < NumberChars; i += 2)
            {
                bytes[i / 2] = Convert.ToByte(HexString.Substring(i, 2), 16);
            }
            return bytes;
        }//End hex string to byte array

        public int ordinalIndexOf(String str, String substr, int n)
        {
            int pos = str.IndexOf(substr);
            while (--n > 0 && pos != -1)
                pos = str.IndexOf(substr, pos + 1);
            return pos;
        }

        public string bytesToHexString(byte[] data)
        {
            if (data == null)
            {
                throw new ArgumentNullException("data");
            }

            int length = data.Length;
            char[] hex = new char[length * 2];
            int num1 = 0;
            for (int index = 0; index < length * 2; index += 2)
            {
                byte num2 = data[num1++];
                hex[index] = GetHexValue(num2 / 0x10);
                hex[index + 1] = GetHexValue(num2 % 0x10);
            }
            return new string(hex);
        }//End NewConverted

        private char GetHexValue(int i)
        {
            if (i < 10)
            {
                return (char)(i + 0x30);
            }
            return (char)((i - 10) + 0x41);
        }//end GetHexValue


    }//Enc Class File Utils