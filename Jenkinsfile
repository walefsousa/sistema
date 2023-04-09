pipeline{
   
    agent any
    stages {
        stage('Build image'){
            steps{
                script {
                    dockerapp = docker.build("walef/sistema_imagem", ' -f ./dockerfile/Dockerfile ./dockerfile')        
                }
            }
        } 
    }
}